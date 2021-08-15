@extends('layout')

@section('content')


<form action="{{route('credenciada.UptadeDisable',$credenciada->id )}}" method="post">
    @csrf
    {{method_field('put')}}
    <h2>desabilitar</h2>
    <input type="checkbox" name="habilitada" id="habilitada" value="0">

    <h2>habilitar</h2>
    <input type="checkbox" name="habilitada" id="habilitada" value="1">

    <input type="submit" value="acao">
</form>
@stop
