@extends('layout')

@section('titulo', 'Cadastrar animal')
@section('content')

<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >
        <form action="{{route('animal.store', ['id' => $id])}}" method="post">
            @csrf
            <legend>Cadastrar Animal</legend>
            <br><br>
    
            <div class="input-block">
                <legend>Nome</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="nome" id="nome">
            </div>
    
            <div class="input-block">
                <legend>Tipo de aquisição</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="tipo_aquisição" id="tipo_aquisição">
            </div>
    
            <div class="input-block">
                <legend>Microchip</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="microchip" id="microchip">
            </div>
    
            <div class="input-block">
                <legend>Porte</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="porte" id="porte">
            </div>
    
            <div class="input-block">
                <legend>Data de nascimento</legend>
                <input type="date" name="data_nascimento" id="data_nascimento">
            </div>
    
            <div class="input-block">
                <legend>Sexo</legend>
                <input type="text" name="sexo" id="sexo">
            </div>
    
            <input  style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem" class = "btn" type="submit" class = "primary-button" value="Cadastrar">
        </form>
      
    </div>
    
  </div>



    
@stop
