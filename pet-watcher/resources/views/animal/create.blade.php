@extends('layout')

@section('titulo', 'Cadastrar Animal')
@section('content')

<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >
        
            
    <form action="{{route('animal.store', ['id_proprietario' => $id_proprietario])}}" method="post">
        @csrf
        <legend>Cadastrar Animal</legend>
        <br>

        <div class="input-block">
            <legend>Nome</legend>
            <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="nome" id="nome">
        </div>

        <div class="input-block">
            <legend>Tipo de aquisição</legend>
            <input style = "height: 2.6rem; margin-bottom: 1.2rem" type="text" name="tipo_aquisicao" id="tipo_aquisicao">
        </div>

        <div class="input-block">
            <legend>Microchip</legend>
            <input style = "height: 2.6rem; margin-bottom: 1.2rem" type="text" name="codigo_microchip" id="codigo_microchip">
        </div>

        <div class="input-block">
            <legend>Porte</legend>
            <input style = "height: 2.6rem; margin-bottom: 1.2rem" type="text" name="porte" id="porte">
        </div>

        <div class="input-block">
            <legend>Data de nascimento</legend>
            <input type="date" name="data_nascimento" id="data_nascimento">
        </div>

        <div class="input-block">
            <legend>Sexo</legend>
            <input style = "height: 2.6rem; margin-bottom: 1.2rem" type="text" name="sexo" id="sexo">
        </div>

        <div class="input-block">
            <legend>Especie</legend>
            <select name="especie" id="especie">
            <option value="0">Selecione</option>
            @foreach($especies as $especie)
            <option value="{{ $especie->id }}">{{$especie->nome_popular}}</option>
            @endforeach

            </select>
        </div>


        <input style = "background: #27df83; color: white; margin-top: .6rem; width: 100%;"  type="submit" class = "btn" value="Cadastrar">
    </form>

 
    </div>
    
  </div>






@stop
