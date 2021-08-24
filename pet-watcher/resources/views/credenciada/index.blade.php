@extends('layout')

@section('titulo', 'Credenciadas')

@section('content')

<table class = "table table-hover">
    <thead>
        <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Email</th>
        <th></th>
        <th></th>
        <th></th>
        </tr>

    </thead>
    @foreach($credenciadas as $credenciada)

    <tbody>
        <tr>
        <td><a href=" {{route('credenciada.show',$credenciada->id)}} ">{{$credenciada->razao_social}}</a></td>
        <td> {{$credenciada->endereco}} </td>
            <td> {{$credenciada->telefone}} </td>
            <td> {{$credenciada->endereco}} </td>

            <td><a class = "btn btn-outline-primary" href=" {{route('credenciada.edit',$credenciada->id)}}">Editar</a></td>
            <td><a  class="btn btn-outline-secondary" href="{{route('credenciada.showRestForm')}}">Alterar Senha</a></td>
            <td><a class = "btn btn-outline-danger" href="{{route('credenciada.showFormDisable',$credenciada->id)}}">Desabilitar</a></td>
        </tr>

    </tbody>
    @endforeach

</table>

    <a style = "background: #27df83; color: white; margin-top: .6rem" class = "btn" href="{{route('credenciada.create')}}"> Nova Credenciada</a>

@stop
