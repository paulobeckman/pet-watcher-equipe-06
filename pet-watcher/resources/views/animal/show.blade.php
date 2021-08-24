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







    </div>
@stop
