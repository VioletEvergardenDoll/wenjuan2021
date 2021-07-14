@extends('common.layout')
@section('title','编辑用户')
@section('content')
    <h1> 编辑用户</h1>
    <form action="/adm/user/edit-user" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" value="{{$user->id}}" readonly>
        </div>
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" readonly>

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" readonly>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="vote">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirm</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{$user->password}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
