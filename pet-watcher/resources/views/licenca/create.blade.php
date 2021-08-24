@extends('layout')

@section('content')
<div id = "page-create-especie">
</div>
    <form action="{{route('licenca.store', ['id' => $id])}}" method="post">
        @csrf
        <legend>Cadastrar Licença</legend>
        <br>

        <div class="input-block">
            <legend>Data do Licenciamento</legend>
            <input type="date" name="data_licenciamento" id="data_licenciamento">
        </div>

        <div class="input-block">
            <legend>Data do Vencimento</legend>
            <input type="date" name="data_vencimento" id="data_vencimento">
        </div>

        <input type="submit" class = "primary-button" value="Cadastrar">
        <a  href="{{ url()->previous() }}">
    <i class="fa fa-arrow-circle-o-left"></i>
    <span>Voltar</span>
</a>
    </form>
@stop
