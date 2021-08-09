@extends('layout')

@section('content')
    <form action="{{route('password.email')}}" method="post">
        <input type="text" name="email" id="email">
        <input type="submit" value="acao">
    </form>
@stop
