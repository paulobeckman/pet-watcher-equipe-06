@extends('layout')

@section('titulo', 'Gestão Proprietario')
@section('content')

<div class="card">
<a class="btn btn-primary" href=" {{route ('proprietario.index',['id'=>$empregado->id_credenciada])}}">Gerenciamento de proprietário de animais</a>
    <table>
        <div class="card-body">

            <h4>Funcionários</h4>

            <tr>

                <td> {{$empregado->nome_completo}} </td>
                <td> {{$empregado->cpf}} </td>
            </tr>

        </div>
</div>



</table>
<a href="{{ route('credenciada.index') }}">
    <i class="fa fa-arrow-circle-o-left"></i>
    <span>Voltar</span>
</a>
@stop
