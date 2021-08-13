@extends('layout')

@section('content')

<div id="page-login">
    <main>
        <nav class = "navbar">Pet Watcher</nav>

<form action="{{ action('Auth\LoginController@login') }}" method="POST">
    @csrf

    <div class="input-block">
        <input  type="email" name="email" id="email" placeholder="login">
    </div>
    
    <div class="input-block">
    <input  type="password" name="password" id="password" placeholder="senha">
    </div>

    <input type="submit" class= "primary-button" value="Entrar">

</form>
    </main>
</div>


@stop
