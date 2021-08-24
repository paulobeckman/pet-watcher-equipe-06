@extends('layout')

@section('titulo', 'Animais')
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



</table>

<a style = "background: #27df83; color: white; margin-top: .6rem" class = "btn" href="{{action('AnimalController@create')}}">Cadastrar Animal</a>
@stop
