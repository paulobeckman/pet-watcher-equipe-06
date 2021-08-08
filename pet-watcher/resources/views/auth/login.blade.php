@extends('layout')

@section('content')



<form action=" {{route('login')}} "method="post"  >
    @csrf
    <input  type="email" name="email" id="email" placeholder="login">
    <input  type="password" name="password" id="password" placeholder="senha">

    <input type="submit" value="acao">
</form>

@stop
