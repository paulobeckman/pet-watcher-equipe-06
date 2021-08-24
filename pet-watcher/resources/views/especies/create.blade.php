@extends('layout')

@section('titulo', 'Cadastrar Especie')

@section('content')

<div class="card mt-5" style = "width: 30rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >
        <form action="{{action('EspecieController@store')}}" method="post">
            @csrf
            <legend>Cadastrar Espécie</legend>
            <br>    
            <div class="input-block">
                <legend>Nome Científico</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="nome_cientifico" id="nome_cientifico">
            </div>
    
            <div class="input-block">
                <legend>Nome Popular</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="nome_popular" id="nome_popular">
            </div>        
            
            <input  style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem" type="submit" class = "btn" value="Cadastrar">
        </form> 
    </div>
     
    </div>

@stop
