@extends('layout')

@section('titulo', 'Cadastrar Proprietario')
@section('content')




<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >
        
<form action="{{route('proprietario.store',['id'=>$id])}}" method="post">

    @csrf
    <legend>Cadastrar Proprietário</legend>
    <br>

    <div class="input-block">
        <legend>Tipo Pessoa</legend>
        <select name="tipo_pessoa" id="tipo_pessoa">
            <option value="0">juridica</option>
            <option value="1">fisica</option>
        </select>
    </div>

    <div class="input-block">
        <legend style = "margin-top: 1.2rem">CPF/CNPJ</legend>
        <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem;" type="text" name="cpf_cnpj" id="cpf_cnpj">
    </div>


    <div class="input-block">
        <legend>Nome completo</legend>
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


    <input style = "background: #27df83; color: white; margin-top: .6rem; width: 100%;" type="submit" class="btn" value="Cadastrar">
</form>
    </div>
    
  </div>






@stop
