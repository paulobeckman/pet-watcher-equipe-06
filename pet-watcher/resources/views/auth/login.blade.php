@extends('layout')

@section('titulo', 'Login')

@section('content')

<div class="card text-center mt-5" style = "width: 24rem; margin: auto; border-radius:1rem" >
    <div class="card-header" style = "background: #15c3d6; color: white; padding: 12px 12px; font-size: 1.2rem; border-radius:1rem 1rem 0 0 ">
     Login
    </div>

    <div class="card-body" >

        <form  action="{{ action('Auth\LoginController@login') }}" method="POST">
            @csrf
        
            <div class="input-block" style= "margin-top: .6rem">
                <input type="text" name="email" id="email" placeholder="Usuário">
            </div>
        
            <div class="input-block" style= "margin-top: .8rem">
                <input type="password" name="password" id="password" placeholder="Senha">
            </div>
        
            <input class = "btn " type="submit" value="Entrar" style = "width: 52%; background: #3cdc8c; color: white; margin-top: .6rem">
        
        </form>
      
    </div>
    
  </div>



@stop
