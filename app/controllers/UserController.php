<?php


class UserController extends BaseController
{

    /*
     * csrf过滤器
     */
    public function __construct()
    {
        $this->beforeFilter('auth',array('except'=>array('login','Dologin')));
        $this->beforeFilter('csrf',array('on'=>'post'));
    }
    /**
     * 用户列表页
     */
    public function getIndex()
    {
        $users = User::paginate(4);
        return View::make('user.list')->with('users',$users);
    }

    /**
     * 添加用户
     */
    public function getAddUser()
    {
        return View::make('user.add');
    }

    public function postAddUser()
    {
        //表单验证
        $data =Input::all();
        $rules =array(
            'username'=>'required|unique:users|min:5|regex:/^[a-zA-Z]+([A-Za-z0-9])*/',
            'password'=>'required|min:6|confirmed',
            'email'=>'required|email|unique:users'
        );
        $validator = Validator::make($data,$rules);
        if($validator->fails())
        {
            $errors = $validator->messages();
            return Redirect::to('/adm/user/add-user')->withErrors($errors);
        }



        $username=Input::get('username');
        $email=Input::get('email');
        $password=Input::get('password');
        $users =new User();
        $users->username=$username;
        $users->email=$email;
        $users->password=Hash::make($password);
        $users->save();
        return Redirect::to('/adm');
    }

    public function getEditUser($id)
    {
        $user = User::find($id);
        return View::make('user.edit')->with('user',$user);
    }
    public function postEditUser()
    {
        $id=Input::get('id');
        $username=Input::get('username');
        $email=Input::get('email');
        $password=Input::get('password');
        $user =User::find($id);
        $user->username=$username;
        $user->email=$email;
        $user->password=Hash::make($password);
        $user->save();
        $users=User::paginate(5);
        return Redirect::to('/adm');
    }


    public function login()
    {
        return View::make('user.login');
    }
    public function Dologin()
    {
        $username=Input::get('username');
        $password=Input::get('password');
        if(Auth::attempt(array('username'=>$username,'password'=>$password)))
        {
            return Redirect::to('/adm');
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}