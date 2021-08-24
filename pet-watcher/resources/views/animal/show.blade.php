@extends('layout')

@section('content')

    <div>
        <h3>nome: {{$animal->nome}}</h3>
        <h3>Tipo de Aquisição: {{$animal->tipo_aquisicao}}</h3>
        <h3>Código do Microchip: {{$animal->codigo_microchip}}</h3>
        <h3>Porte: {{$animal->porte}}</h3>
        <h3>Data de nascimeento: {{$animal->data_nascimento}}</h3>
        <h3>Sexo: {{$animal->sexo}}</h3>
        <h3>Especie: {{$especie->nome_popular}}</h3>
        <h3>Proprietario: {{$proprietario->nome_completo}}</h3>

            @if($animal->ativo === true)
            @if($pedigree === null)
            <a class = "btn btn-info" href=" {{route('pedigree.create',['id' => $animal->id])}}">Cadastrar Pedigree </a>
            @endif
            @if($pedigree != null)
            <h3>Código do pedigree: {{$pedigree->codigo}}</h3>
            <h3>Origem do pedigree: {{$pedigree->origem}}</h3>
            @endif
            <a class = "btn btn-info" href=" {{route('animal.desative',['id' => $animal->id])}}">Inativar cadastro de animal</a>
            @endif
            @if($animal->ativo === false)
            <h3>Cadastro inativado pelo motivo: {{$animal->motivo_inativacao}}</h3>
            @endif

    </div>
@stop
