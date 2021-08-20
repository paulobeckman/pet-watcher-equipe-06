@extends('layout')

@section('content')
<table>
    @foreach($proprietarios as $proprietario)

    <tbody>
        <tr>
            <td><a href="{{route('proprietario.show', $proprietario->id)}}">{{$proprietario->nome_completo}}</a></td>
            <td>{{$proprietario->telefone}}</td>
            <td>{{$proprietario->endereco}}</td>

            <td><a href="{{route('proprietario.edit', $proprietario->id)}}">editar</a> </td>
            <td>
                <form action="{{route('proprietario.destroy', $proprietario->id)}}" method="post">
                    @csrf
                    {{method_field('delete')}}

                    <input type="submit" value="deletar">
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach

    <button><a href="{{route('proprietario.create')}}">Cadastrar Proprietario</a></button>


</table>

@stop
