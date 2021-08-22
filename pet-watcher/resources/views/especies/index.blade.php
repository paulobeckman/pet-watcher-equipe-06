@extends('layout')

@section('titulo', 'Especies')
@section('content')

<table class = "table table-hover ">
    <thead>
        <tr>
          <th scope="col">Nome Popular</th>
          <th scope="col">Nome Científico</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>

    @foreach($especie as $tipo)
    <tbody> 
       
        <tr>
            <td>{{$tipo->nome_cientifico}}</td>
            <td>{{$tipo->nome_popular}}</td>
            <td><a class = "btn btn-outline-primary" href="./especies/edit/{{$tipo->id}}">Editar</a> </td>
            <td>
                <form action="{{action ('EspecieController@destroy', $tipo->id)}}" method="post">
                    @csrf
                    {{method_field('delete')}}

                    <input type="submit" class = "btn btn-outline-danger" value="Deletar">
                </form>
            </td>
          </tr>

    </tbody>
    @endforeach

</table>

<a style = "background: #27df83; color: white; margin-top: .6rem" class = "btn" href="{{action('EspecieController@create')}}">Nova Espécie</a>
@stop
