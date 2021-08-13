@extends('layout')

@section('content')



<form action="{{ action('Auth\LoginController@login') }}" method="POST">
    @csrf
    <p><input type="email" name="email" placeholder="Email"></p>
    <p><input type="password" name="password" placeholder="Senha"></p>
    <p><input type="submit" value="Login"></p>
</form>

@stop
