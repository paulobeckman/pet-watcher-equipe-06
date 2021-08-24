@extends('layout')

@section('content')

<div class="card text-center mt-5" style = "width: 30rem; margin: auto; border-radius:1rem" >
    <div class="card-header" style = "background: #15c3d6; color: white; padding: 12px 12px; font-size: 1.2rem; border-radius:1rem 1rem 0 0 ">
     Cadastro Concluído
    </div>

    <div class="card-body" >
        <legend>Suas credenciais de acesso:</legend>
        <h5 class="card-title">Seu login é: {{$login}}  </h5>
        <h5 class="card-title">Sua senha é: {{$password}} </h5>  
    <p class="card-text">Guarde bem essas informações para poder fazer login no sistema</p>
    </div>
    
  </div>

    


@stop
