@extends('layout')

@section('content')

<table>
    <thead>
        <tr>nome</tr>
        <tr>endereço</tr>
        <tr>telefone</tr>
        <tr>email</tr>
    </thead>
    @foreach($credenciada as $tipo)

    <tbody>
        @if($tipo->habilitada);
        <tr>
            <td> {{$tipo->razao_social}} </td>
            <td> {{$tipo->endereco}} </td>
            <td> {{$tipo->telefone}} </td>
            <td> {{$tipo->endereco}} </td>

            <td><a href=" {{route('credenciada.edit',$tipo->id)}}">editar</a></td>
            <td><a href=" {{route('credenciada.show',$tipo->id)}} ">consultar</a></td>
            <td><a href="{{route('credenciada.showRestForm')}}">trocaSenha</a></td>
            <td><a href="{{route('credenciada.showFormDisable',$tipo->id)}}">desabilitar</a></td>
        </tr>
        @endif

        @if(!$tipo->habilitada)
        <tr style="color: #999;">
            <td> {{$tipo->razao_social}} </td>
            <td> {{$tipo->endereco}} </td>
            <td> {{$tipo->telefone}} </td>
            <td> {{$tipo->endereco}} </td>

            <td><a href=" {{route('credenciada.edit',$tipo->id)}}">editar</a></td>
            <td><a href=" {{route('credenciada.show',$tipo->id)}} ">consultar</a></td>
            <td><a href="{{route('credenciada.showRestForm')}}">trocaSenha</a></td>
            <td><a href="{{route('credenciada.showFormDisable',$tipo->id)}}">desabilitar</a></td>
        </tr>
        @endif



    </tbody>
    @endforeach

    <a href="{{route('credenciada.create')}}"> Cadastra nova Credenciada</a>

</table>
@stop
