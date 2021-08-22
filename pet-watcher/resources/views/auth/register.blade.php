@extends('layout')

@section('content')

<form action="{{ route('register') }}" method="post">
    @csrf
    
    <fieldset>
        <div class="input-block">
            <input id="name" type="text"  name="name" placeholder="Nome">
        </div>

        <div class="input-block">
            <input id="email" type="email"  name="email" placeholder="Email">
        </div>

        <div class="input-block">
            <input id="password" type="password" name="password" placeholder="Senha">
        </div>

        <div class="input-block">
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar Senha">
        </div>
     
        <button type="submit" class = "primary-button">Cadastrar</button>
        </fieldset>
   

</form>

@stop
