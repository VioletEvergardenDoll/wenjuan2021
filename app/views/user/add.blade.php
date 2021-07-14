@extends('common.layout')
@section('title','添加新用户')
@section('content')
    <h1> 添加新用户</h1>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/adm/user/add-user" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" class="form-control" id="username" name="username" @if(isset($data)) value="{{$data['username']}}"@endif>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="email" name="email" @if(isset($data)) value="{{$data['email']}}"@endif>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="vote">Password</label>
            <input type="password" class="form-control" id="password" name="password" @if(isset($data)) value="{{$data['password']}}"@endif>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirm</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" @if(isset($data)) value="{{$data['password']}}"@endif>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
