@extends('layout')

@section('content')

<table>
    <thead>
        <tr>nome</tr>
        <tr>endereço</tr>
        <tr>telefone</tr>
        <tr>email</tr>
    </thead>

    <tbody>

        <tr>
            <td> {{$credenciada->razao_social}} </td>
            <td> {{$credenciada->endereco}} </td>
            <td> {{$credenciada->telefone}} </td>
            <td> {{$credenciada->endereco}} </td>

            <button><a href=" {{route('credenciada.edit',$credenciada->id)}}">editar</a></button>
            <button><a href=" {{route('empregado.create',['id' => $credenciada->id])}}">cadastrar funcionarios</a></button>
            <button><a href=" {{route('licenca.create',['id' => $credenciada->id])}}">cadastrar licença para credenciada</a></button>
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
