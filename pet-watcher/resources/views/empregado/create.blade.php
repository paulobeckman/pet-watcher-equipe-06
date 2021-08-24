@extends('layout')

@section('titulo', 'Cadastrar Funcionário')
@section('content')

<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >
        <form action="{{route('empregado.store', ['id' => $id])}}" method="post">
            @csrf
            <h3>Cadastro de Funcionário</h3>
            <br>
    
            <div class="input-block">
                <legend>Nome Completo</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="nome_completo" id="nome_completo">
            </div>
    
    
            <div class="input-block">
                <legend>CPF</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="cpf" id="cpf">
            </div>
    
            <div class="input-block">
                <legend>Telefone</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="telefone" id="telefone">
            </div>
    
            <div class="input-block">
                <legend>Endereço</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="endereco" id="endereco">
            </div>
    
            <input type="hidden" name="tipo_conta" id="tipo_conta" value="2">
    
            <input class = "btn" type="submit" class = "primary-button" value="Cadastrar" style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem">

        </form>
        
      
    </div>
    
  </div>

  
    
@stop
