@extends('layout')

@section('content')
<div id = "page-create-especie">
</div>
    <form action="{{route('empregado.store')}}" method="post">
        @csrf
        <legend>Cadastrar Credenciada</legend>
        <br>

        <div class="input-block">
            <legend>cnpj</legend>
            <input type="text" name="cnpj" id="cnpj">
        </div>

        <div class="input-block">
            <legend>inscricao estadual</legend>
            <input type="text" name="inscricao_estadual" id="inscricao_estadual">
        </div>

        <div class="input-block">
            <legend>razao social</legend>
            <input type="text" name="razao_social" id="razao_social">
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
            <legend>endereco</legend>
            <input type="text" name="endereco" id="endereco">
        </div>

        <input type="submit" class = "primary-button" value="Cadastrar">
    </form>
@stop
