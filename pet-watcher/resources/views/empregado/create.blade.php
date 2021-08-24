@extends('layout')

@section('content')
<div id = "page-create-especie">
</div>
    <form action="{{route('empregado.store', ['id' => $id])}}" method="post">
        @csrf
        <legend>Cadastrar Empregado</legend>
        <br>

        <div class="input-block">
            <legend>nome completo</legend>
            <input type="text" name="nome_completo" id="nome_completo">
        </div>


        <div class="input-block">
            <legend>CPF</legend>
            <input type="text" name="cpf" id="cpf">
        </div>

        <div class="input-block">
            <legend>telefone</legend>
            <input type="text" name="telefone" id="telefone">
        </div>

        <div class="input-block">
            <legend>endereco</legend>
            <input type="text" name="endereco" id="endereco">
        </div>

        <input type="hidden" name="tipo_conta" id="tipo_conta" value="2">

        <input type="submit" class = "primary-button" value="Cadastrar">
    </form>
@stop
