@extends('layout')

@section('content')

<div>
    Editar
</div>

<div>
    <form action="{{action ('EspecieController@update', $especie->id)}}" method="post">
        @csrf
        {{method_field('put')}}

        <input type="text" name="nome_cientifico" id="nome_cientifico">
        <input type="text" name="nome_popular" id="nome_popular">
        <input type="submit" value="acao">
    </form>
</div>
@stop
