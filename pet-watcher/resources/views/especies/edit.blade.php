@extends('layout')

@section('content')

<div class="card mt-5" style = "width: 30rem; margin:auto; border-radius:1rem" >
  

<div class="card-body" >
    <legend>Editar Espécie</legend>
    <br>
    <form action="{{action ('EspecieController@update', $especie->id)}}" method="post">
        @csrf
        {{method_field('put')}}

        <div class="input-block">
            <legend>Nome Científico</legend>
            <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="nome_cientifico" id="nome_cientifico">
        </div>
        
        <div class="input-block">
            <legend>Nome Popular</legend>
            <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="nome_popular" id="nome_popular">
        </div>
        
        <input class = "btn"style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem" type="submit" value="Editar">
    </form>


    </div>
     
</div>




<div>
    
</div>
@stop
