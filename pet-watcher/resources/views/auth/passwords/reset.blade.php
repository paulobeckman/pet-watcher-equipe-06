@extends('layout')
@section('content')


<div>
    <form action="{{route('password.uptade')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$token}}">

        <input id="email" type="email" name="email" >
        <input id="password" type="password" name="password">
        <input id="password-confirm" type="password" name="password_confirmation">
    </form>

</div>
@stop
