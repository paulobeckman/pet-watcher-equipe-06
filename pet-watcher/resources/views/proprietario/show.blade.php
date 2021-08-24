@extends('layout')

@section('content')

<div>
    <h2>
        Tipo pessoa:
        @if($proprietario->tipo_pessoa == 0)
            juridica
        @endif

        @if($proprietario->tipo_pessoa == 1)
            fisica
        @endif
    </h2>

    <h2>cpf/cnpj {{$proprietario->cpf_cnpj}} </h2>
    <h2>nome {{$proprietario->nome_completo}} </h2>
    <h2>telefone {{$proprietario->telefone}} </h2>
    <h2>email {{$proprietario->email}} </h2>
    <h2>endereco {{$proprietario->endereco}} </h2>

    <a  href="{{ url()->previous() }}">
                <i class="fa fa-arrow-circle-o-left"></i>
                <span>Voltar</span>
    </a>
</div>
<a class = "btn btn-info" href=" {{route('animal.create',['id_proprietario' => $proprietario->id])}}">
Cadastrar um novo animal de {{$proprietario->nome_completo}}</a>
<h2>Animais desse proprietário</h2>
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

@stop
