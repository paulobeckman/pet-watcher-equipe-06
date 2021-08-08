@extends('layout')

@section('content')

<table>
    @foreach($especie as $tipo)

    <tbody>
        <tr>
            <td>{{$tipo->nome_cientifico}}</td>
            <td>{{$tipo->nome_popular}}</td>

            <td><a href="./especies/edit/{{$tipo->id}}">editar</a> </td>
            <td>
                <form action="{{action ('EspecieController@destroy', $tipo->id)}}" method="post">
                    @csrf
                    {{method_field('delete')}}

                    <input type="submit" value="deletar">
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach

    <a href="{{action('EspecieController@create')}}">Nova Especie</a>

</table>
@stop
