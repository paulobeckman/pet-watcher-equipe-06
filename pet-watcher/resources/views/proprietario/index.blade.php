@extends('layout')

@section('titulo', 'Proprietarios')
@section('content')


<table class="table table-striped">
    <thead>
        <th>Nome</th>
        <th>CPF</th>
    </thead>
    @foreach($proprietarios as $proprietario)

    <tbody>
        <tr>
        <td><a href=" {{route('proprietario.show',$proprietario->id)}} ">{{$proprietario->nome_completo}}</a></td>
            <td> {{$proprietario->cpf}} </td>

            <td><a class = "btn btn-outline-primary" href=" {{route('proprietario.edit',$proprietario->id)}}">Editar</a></td>
        </tr>
    </tbody>
    @endforeach
    <br>
    <a style = "background: #27df83; color: white; margin-top: .6rem" class = "btn"  href=" {{route('proprietario.create',['id' => $credenciada->id])}}">Novo Proprietário de animal</a>

</table>
@stop
