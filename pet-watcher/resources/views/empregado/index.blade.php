@extends('layout')

@section('titulo', 'Gestão de Proprietário')
@section('content')

<h3>Lista de Proprietários</h3>

<table class = "table table-hover">
    @foreach($proprietarios as $proprietario)

    <tbody>
        <tr>
            <td><a href="{{route('proprietario.show', $proprietario->id)}}">{{$proprietario->nome_completo}}</a></td>
            <td>{{$proprietario->telefone}}</td>
            <td>{{$proprietario->endereco}}</td>

            <td><a class = "btn btn-info"href="{{route('proprietario.edit', $proprietario->id)}}">editar</a> </td>
            <td>
                <form action="{{route('proprietario.destroy', $proprietario->id)}}" method="post">
                    @csrf
                    {{method_field('delete')}}

                    <input class = "btn btn-danger" type="submit" value="deletar">
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach


</table>


<a class= "btn btn-primary" href="{{route('proprietario.create')}}">Novo Proprietário</a>



@stop
