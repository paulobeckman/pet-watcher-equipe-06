@extends('layout')

@section('content')

<form action="{{ route('register') }}" method="post">
    @csrf

    <input id="name" type="text"  name="name" value="{{ old('name') }}"  autofocus>
    <input id="email" type="email"  name="email" value="{{ old('email') }}" >
    <input id="password" type="password" name="password" >
    <input id="password-confirm" type="password" name="password_confirmation" >
    <button type="submit">register</button>


</form>

@stop
