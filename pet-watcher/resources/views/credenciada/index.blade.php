@extends('layout')

@section('content')

<table>
    <thead>
        <tr>nome</tr>
        <tr>endereço</tr>
        <tr>telefone</tr>
        <tr>email</tr>
    </thead>
    @foreach($credenciadas as $credenciada)

    <tbody>
        <tr>
        <td><a href=" {{route('credenciada.show',$credenciada->id)}} ">{{$credenciada->razao_social}}</a></td>            <td> {{$credenciada->endereco}} </td>
            <td> {{$credenciada->telefone}} </td>
            <td> {{$credenciada->endereco}} </td>

            <td><a href=" {{route('credenciada.edit',$credenciada->id)}}">editar</a></td>
            <td><a href="{{route('credenciada.showRestForm')}}">trocaSenha</a></td>
            <td><a href="{{route('credenciada.showFormDisable',$credenciada->id)}}">desabilitar</a></td>
        </tr>

    </tbody>
    @endforeach
    <br>
    <a href="{{route('credenciada.create')}}"> Cadastra nova Credenciada</a>

</table>
@stop
