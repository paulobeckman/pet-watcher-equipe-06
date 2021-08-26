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
                <legend>Motivo da Desativação</legend>
                <input type="text" name="motivo_inativacao" id="motivo_inativacao">
            </div>

            <input class = "btn" style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem"type="submit" class ="primary-button" value="Desativar"><br>
            
        </form>



    </div>
    

  </div>

  <a style = "width: 10%; color: white; " class = "btn btn-info mt-5" href="{{ url()->previous() }}">
    <i class="bi bi-arrow-left"></i>
    <span>Voltar</span>
</a>




@stop
