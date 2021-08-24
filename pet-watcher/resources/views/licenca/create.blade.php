@extends('layout')

@section('titulo', 'Licença')


@section('content')

<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >

        <form action="{{route('licenca.store', ['id' => $id])}}" method="post">
            @csrf
            <legend>Cadastrar Licença</legend>
            <br>
    
            <div class="input-block">
                <legend>Data do Licenciamento</legend>
                <input type="date" name="data_licenciamento" id="data_licenciamento">
            </div>
    
            <div class="input-block">
                <legend>Data do Vencimento</legend>
                <input type="date" name="data_vencimento" id="data_vencimento">
            </div>
    
            <input class = "btn" style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem"type="submit" class = "primary-button" value="Cadastrar">
<br><br>
            <a  href="{{ url()->previous() }}">
                <i class="fa fa-arrow-circle-o-left"></i>
                <span>Voltar</span>
            </a>
        </form>
        
      
    </div>
    
  </div>



    
@stop
