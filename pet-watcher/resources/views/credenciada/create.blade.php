@extends('layout')

@section('content')
<div id = "page-create-especie">
    <main>
        <nav id = "menu">
            <ul>
                <li><a href = "#">Cadastro</a></li>
                <li><a href = "#">Espécie</a></li>
                <li><a href = "#">Consulta</a></li>
                <li><a href = "#">Licença</a></li>
                <li><a href = "#">Alterar Senha</a></li>
                <li><a href = "#">Logout</a></li>
            </ul>
        </nav>
    </main>
</div>
    <form action="{{route('credenciada.store')}}" method="post">
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

        <input type="hidden" name="tipo_conta" id="tipo_conta" value="1">

        <input type="submit" class = "primary-button" value="Cadastrar">
    </form>
@stop
