@extends('layout')

@section('content')
    <form action="{{route('credenciada.update' , $credenciada->id)}}" method="post">
        @csrf
        {{method_field('put')}}

        <input type="text" name="cnpj" id="cnpj" placeholder="cnpj">
        <input type="text" name="inscricao_estadual" id="inscricao_estadual" placeholder="inscricao_estadual">
        <input type="text" name="razao_social" id="razao_social" placeholder="razao_social">
        <input type="text" name="telefone" id="telefone" placeholder="telefone">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="text" name="endereco" id="endereco" placeholder="endereco">

        <input type="submit" value="acao">
    </form>
@stop
