@extends('layout')

@section('titulo', 'Gestão de Proprietários')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>Proprietário</th>
            <th>Opções</th>
        </tr>
    </thead>
    @foreach($proprietarios as $proprietario)

    <tbody>
        <tr>
        <td><a href=" {{route('proprietario.show',$proprietario->id)}} ">{{$proprietario->nome_completo}}</a></td>
        <td><a href=" {{route('proprietario.edit',$proprietario->id)}}">editar</a></td>
        </tr>
    </tbody>
    @endforeach
    <br>

</table>

                        <a class = "btn btn-primary"href=" {{route('proprietario.create',['id' => $credenciada->id])}}">
                            <i class="bi bi-plus-lg"></i>
                            Novo proprietário de animal
                        </a><br>

        <a  class = "btn btn-primary mt-5"href="{{ route('credenciada.show',['id' => $credenciada->id]) }}">
                 <i class="bi bi-arrow-left"></i>
                <span>Voltar</span>
         </a>
@stop








