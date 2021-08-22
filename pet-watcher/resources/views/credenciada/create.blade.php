@extends('layout')

@section('content')
    <form action="{{route('credenciada.store')}}" method="post">
        @csrf
        <legend>Cadastrar Credenciada</legend>
        <br>
 
           <div class="input-block">
                <legend>CNPJ</legend>
                <input type="text" name="cnpj" id="cnpj">
            </div>  

            <div class="input-block">
                <legend>Inscrição Estadual</legend>
                <input type="text" name="inscricao_estadual" id="inscricao_estadual">
            </div>  

            <div class="input-block">
                <legend>Razão Social</legend>
                <input type="text" name="razao_social" id="razao_social">
            </div>

            <div class="input-block">
                <legend>Telefone</legend>
            <input type="text" name="telefone" id="telefone">
            </div>

            <div class="input-block">
                <legend>Email</legend>
                <input type="text" name="email" id="email">
            </div>

            <div class="input-block">
                <legend>Endereço</legend>
                <input type="text" name="endereco" id="endereco">
            </div>
            

        <input type="hidden" name="tipo_conta" id="tipo_conta" value="1">

        <input  style = "background: #27df83; color: white; margin-top: .6rem" type="submit" class = "btn" value="Cadastrar">
    </form>
@stop
