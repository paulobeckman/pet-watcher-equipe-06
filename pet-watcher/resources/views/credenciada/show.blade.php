@extends('layout')

@section('content')

<table class = "table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>{{$credenciada->razao_social}} </td>
            <td> {{$credenciada->endereco}} </td>
            <td> {{$credenciada->telefone}} </td>
            <td> {{$credenciada->endereco}} </td>

            <a class = "btn btn-primary" href=" {{route('credenciada.edit',$credenciada->id)}}">Editar {{$credenciada->razao_social}}</a>
            <a style = "margin: 1rem"class = "btn btn-secondary" href=" {{route('empregado.create',['id' => $credenciada->id])}}">Cadastrar funcionários</a>
            <a class = "btn btn-info" href=" {{route('licenca.create',['id' => $credenciada->id])}}">Cadastrar licença para {{$credenciada->razao_social}}</a>
        </tr>

        @foreach($licencas as $licenca)
        <tr>
            <td> {{$licenca->id}} </td>
            <td> {{$licenca->data_vencimento}} </td>
            <td> {{$licenca->data_licenciamento}} </td>
            @if($licenca->data_revogacao === null)
                <td> licença ativa </td>
            <button><a href=" {{route('licenca.revogar',['id' => $credenciada->id, 'idlicenca' => $licenca->id])}}">revogar licenca</a></button>

            @endif
            @if($licenca->data_revogacao != null)
                <td> licença revogada na data {{$licenca->data_revogacao}} </td>
            @endif

        </tr>
        @endforeach
        @foreach($empregados as $empregado)
        <tr>
            <td> {{$empregado->nome}} </td>
        </tr>
        @endforeach
    </tbody>

</table>
@stop
