@extends('layout')

@section('titulo', 'Animais')
@section('content')

<table class = "table table-hover ">
    <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Microchip</th>
          <th scope="col">Data de Nascimeto</th>
        </tr>
      </thead>

    @foreach($animais as $animal)
    <tbody>

        <tr>
        <td><a href=" {{route('animal.show',$animal->id)}} ">{{$animal->nome}}</a></td>
            <td>{{$animal->codigo_microchip}}</td>
            <td>{{$animal->data_nascimento}}</td>

            <td><a class = "btn btn-outline-primary" href="./animal/edit/{{$animal->id}}">Editar</a> </td>
            <td>
                <form action="{{action ('AnimalController@destroy', $animal->id)}}" method="post">
                    @csrf
                    {{method_field('delete')}}

                    <input type="submit" class = "btn btn-outline-danger" value="Deletar">
                </form>
            </td>
          </tr>

    </tbody>
    @endforeach

</table>
<a  href="{{ route('credenciada.index') }}">
                <i class="fa fa-arrow-circle-o-left"></i>
                <span>Voltar</span>
    </a>
@stop
