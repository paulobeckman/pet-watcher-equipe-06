@extends('layout')

@section('content')
<div id = "page-create-especie">
</div>
    <form action="{{route('animal.store', ['id_proprietario' => $id_proprietario])}}" method="post">
        @csrf
        <legend>Cadastrar Animal</legend>
        <br>

        <div class="input-block">
            <legend>Nome</legend>
            <input type="text" name="nome" id="nome">
        </div>

        <div class="input-block">
            <legend>Tipo de aquisição</legend>
            <input type="text" name="tipo_aquisicao" id="tipo_aquisicao">
        </div>

        <div class="input-block">
            <legend>Microchip</legend>
            <input type="text" name="codigo_microchip" id="codigo_microchip">
        </div>

        <div class="input-block">
            <legend>Porte</legend>
            <input type="text" name="porte" id="porte">
        </div>

        <div class="input-block">
            <legend>Data de nascimento</legend>
            <input type="date" name="data_nascimento" id="data_nascimento">
        </div>

        <div class="input-block">
            <legend>Sexo</legend>
            <input type="text" name="sexo" id="sexo">
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


        <input type="submit" class = "primary-button" value="Cadastrar">
    </form>
@stop
