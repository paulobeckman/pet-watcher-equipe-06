@extends('layout')

@section('content')
<div id = "page-create-especie">
</div>
    <form action="{{route('animal.store', ['id' => $id])}}" method="post">
        @csrf
        <legend>Cadastrar Animal</legend>
        <br>

        <div class="input-block">
            <legend>Nome</legend>
            <input type="text" name="nome" id="nome">
        </div>

        <div class="input-block">
            <legend>Tipo de aquisição</legend>
            <input type="text" name="tipo_aquisição" id="tipo_aquisição">
        </div>

        <div class="input-block">
            <legend>Microchip</legend>
            <input type="text" name="microchip" id="microchip">
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

        <input type="submit" class = "primary-button" value="Cadastrar">
    </form>
@stop
