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
    <form action="{{action('EspecieController@store')}}" method="post">
        @csrf
        <legend>Cadastrar Espécie</legend>
        <br>    
        <div class="input-block">
            <legend>Nome Científico</legend>
            <input type="text" name="nome_cientifico" id="nome_cientifico">
        </div>

        <div class="input-block">
            <legend>Nome Popular</legend>
            <input type="text" name="nome_popular" id="nome_popular">
        </div>        
        
        <input type="submit" class = "primary-button" value="Cadastrar">
    </form>
@stop
