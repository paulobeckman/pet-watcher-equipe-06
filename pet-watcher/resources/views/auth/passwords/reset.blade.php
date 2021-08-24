@extends('layout')
@section('content')


<div>
    <form action="{{action('UserController@update', Auth::user())}}" method="post">
        @csrf

        <input type="password" name="password" id="password" placeholder="Nova Senha">

        <input type="submit" value="Trocar Senha">

    </form>

</div>
@stop
