@extends('layout')

@section('content')
<div id="page-create-especie">
</div>
<form action="{{route('proprietario.store',['id'=>$id])}}" method="post">
    @csrf
    <legend>Cadastrar Licença</legend>
    <br>

    <div class="input-block">
        <legend>Tipo Pessoa</legend>
        <select name="tipo_pessoa" id="tipo_pessoa">
            <option value="0">juridica</option>
            <option value="1">fisica</option>
        </select>
    </div>

    <div class="input-block">
        <legend>CPF/CNPJ</legend>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj">
    </div>


    <div class="input-block">
        <legend>Nome completo</legend>
        <input type="text" name="nome_completo" id="nome_completo">
    </div>


    <div class="input-block">
        <legend>telefone</legend>
        <input type="text" name="telefone" id="telefone">
    </div>


    <div class="input-block">
        <legend>email</legend>
        <input type="text" name="email" id="email">
    </div>


    <div class="input-block">
        <legend>Endereco</legend>
        <input type="text" name="endereco" id="endereco">
    </div>


    <input type="submit" class="primary-button" value="Cadastrar">
</form>
@stop
