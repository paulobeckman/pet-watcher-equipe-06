@extends('layout')

@section('titulo', 'Cadastrar Especie')

@section('content')


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
        
        <input  style = "background: #27df83; color: white; margin-top: .6rem" type="submit" class = "btn" value="Cadastrar">
    </form>
@stop
