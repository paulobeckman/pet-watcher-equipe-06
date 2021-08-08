@extends('layout')

@section('content')
    <form action="{{action('EspecieController@store')}}" method="post">
        @csrf
        <input type="text" name="nome_cientifico" id="nome_cientifico">
        <input type="text" name="nome_popular" id="nome_popular">
        <input type="submit" value="acao">
    </form>
@stop
