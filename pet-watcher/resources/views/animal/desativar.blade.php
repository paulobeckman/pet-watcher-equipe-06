@extends('layout')

@section('titulo', 'Pedigree')


@section('content')

<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >


    <div class="card-body" >

        <form action="{{route('animal.desative', ['id' => $id])}}" method="post">
            @csrf
            <legend>Desativar Animal</legend>
            <br>

            <div class="input-block">
                <legend>Motivo da desativação</legend>
                <input type="text" name="motivo_inativacao" id="motivo_inativacao">
            </div>

            <input class = "btn" style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem"type="submit" class ="primary-button" value="desativar"><br>
            <a  href="{{ url()->previous() }}">
                <i class="fa fa-arrow-circle-o-left"></i>
                <span>Voltar</span>
            </a>
        </form>


    </div>

  </div>




@stop
