@extends('layout')

@section('titulo', 'Habilitar')

@section('content')

<div class="card mt-5" style = "width: 34rem; margin:auto; border-radius:1rem" >
  

    <div class="card-body" >

        <form action="{{route('credenciada.UptadeDisable',$credenciada->id )}}" method="post">
            @csrf
            {{method_field('put')}}
            <h3>Desabilitar <input type="checkbox" name="habilitada" id="habilitada" value="0"> </h3>

            <br><br>
        
            <h3>Habilitar <input type="checkbox" name="habilitada" id="habilitada" value="1"></h3>
            
        
            <input class = "btn" style = "width: 100%; background: #3cdc8c; color: white; margin-top: 1.2rem; font-size:1.4rem" type="submit" value="Confirme">
        </form>

      
    </div>
    
  </div>





@stop
