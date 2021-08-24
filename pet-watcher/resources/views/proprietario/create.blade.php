@extends('layout')

@section('titulo', 'Cadastrar Proprietário')
@section('content')


<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >
        
<form action="{{route('proprietario.store',['id'=>$id])}}" method="post">

    @csrf
    <legend>Cadastrar Licença</legend>
    <br>

    <div class="input-block">
        <legend>Tipo Pessoa</legend>
        <select name="tipo_pessoa" id="tipo_pessoa">
            <option value="0">Jurídica</option>
            <option value="1">Física</option>
        </select>
    </div><br> 

    <div class="input-block">
        <legend>CPF/CNPJ</legend>
        <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="cpf_cnpj" id="cpf_cnpj">
    </div>


    <div class="input-block">
        <legend>Nome Completo</legend>
        <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="nome_completo" id="nome_completo">
    </div>


    <div class="input-block">
        <legend>Telefone</legend>
        <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="telefone" id="telefone">
    </div>


    <div class="input-block">
        <legend>Email</legend>
        <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="email" id="email">
    </div>


    <div class="input-block">
        <legend>Endereço</legend>
        <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="endereco" id="endereco">
    </div>


    <input style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem" class = "btn" type="submit" class="primary-button" value="Cadastrar">
</form>
      
    </div>
    
  </div>


@stop
