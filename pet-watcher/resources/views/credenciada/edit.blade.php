@extends('layout')

@section('content')


<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >
        <form form action="{{route('credenciada.update' , $credenciada->id)}}" method="post">
            @csrf
            {{method_field('put')}}

            <h3>Editar {{$credenciada->razao_social}}</h3>
            <br>
    
            <div class="input-block">
                <legend>CNPJ</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem" type="text" name="cnpj" id="cnpj">
            </div>
    
    
            <div class="input-block">
                <legend>Inscrição Estadual</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="inscricao_estadual" id="inscricao_estadual">
            </div>
    
            <div class="input-block">
                <legend>Razão Social</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="razao_social" id="razao_social">
            </div>
    
            <div class="input-block">
                <legend>Telefone</legend>
            <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="telefone" id="telefone">
            </div>

            <div class="input-block">
                <legend>Email</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="email" id="email">
            </div>

            <div class="input-block">
                <legend>Endereço</legend>
                <input style = "width: 100%; height: 2.6rem; margin-bottom: 1.2rem"type="text" name="endereco" id="endereco">
            </div>

            <input  style = "background: #27df83; color: white; margin-top: .6rem; width: 100%;" type="submit" class = "btn" value="Editar">

        </form>
 
    </div>
    
  </div>


@stop
