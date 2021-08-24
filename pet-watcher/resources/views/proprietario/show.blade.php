@extends('layout')

@section('content')

<div>
    <h2>
        Tipo pessoa:
        @if($proprietario->tipo_pessoa == 0)
            juridica
        @endif

        @if($proprietario->tipo_pessoa == 1)
            fisica
        @endif
    </h2>

    <h2>cpf/cnpj {{$proprietario->cpf_cnpj}} </h2>
    <h2>nome {{$proprietario->nome_completo}} </h2>
    <h2>telefone {{$proprietario->telefone}} </h2>
    <h2>email {{$proprietario->email}} </h2>
    <h2>endereco {{$proprietario->Endereco}} </h2>

    <a href="{{route('empregado.index')}}">voltar</a>
</div>
@stop
