@extends('common.layout')
@section('title','用户管理')
@section('content')
    <h1> 用户列表页</h1>
    <p class="text-right"><a class="btn btn-success" href="/adm/user/add-user">添加新用户</a></p>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">operate</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->username}}</td>
                <td>{{$v->email}}</td>
                <td>
                    <a class="btn btn-warning" href="/adm/user/edit-user/{{$v->id}}">修改密码</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="float-right">
        {{$users->links()}}
    </div>

@endsection