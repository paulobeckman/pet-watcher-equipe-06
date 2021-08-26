@extends('layout')

@section('titulo', 'Gestão de Proprietário')
@section('content')
    @foreach($empregados as $empregado)

    <tbody>

        <tr>
            <td><a href="{{route('empregado.show', $empregado->id)}}">{{$empregado->nome_completo}}</a></td>
            <td>{{$empregado->telefone}}</td>
            <td>{{$empregado->endereco}}</td>

            <td><a href="{{route('empregado.edit', $empregado->id)}}">editar</a> </td>
            <td>
                <form action="{{route('empregado.destroy', $empregado->id)}}" method="post">
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
