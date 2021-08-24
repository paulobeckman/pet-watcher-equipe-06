@extends('layout')

@section('content')

    <div>
        <h2>nome_cientifico {{$especie->nome_cientifico}}</h2>
        <h2>nome_popular {{$especie->nome_popular}}</h2>
        <a href="{{action('EspecieController@index')}}">voltar</a>
    </div>
@stop
