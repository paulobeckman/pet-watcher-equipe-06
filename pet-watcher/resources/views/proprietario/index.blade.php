@extends('layout')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>nome</tr>
        <tr>cpf</tr>
    </thead>
    @foreach($proprietarios as $proprietario)

    <tbody>
        <tr>
        <td><a href=" {{route('proprietario.show',$proprietario->id)}} ">{{$proprietario->nome_completo}}</a></td>
            <td> {{$proprietario->cpf}} </td>

            <td><a href=" {{route('proprietario.edit',$proprietario->id)}}">editar</a></td>
        </tr>
    </tbody>
    @endforeach
    <br>
    <button><a href=" {{route('proprietario.create',['id' => $credenciada->id])}}">cadastrar novo proprietario de animal</a></button>

</table>
@stop
