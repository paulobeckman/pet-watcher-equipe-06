@extends('layout')
@section('titulo', 'Trocar Senha')
@section('content')


<div class="card text-center mt-5" style = "width: 24rem; margin: auto; border-radius:1rem" >
    <div class="card-header" style = "background: #15c3d6; color: white; padding: 12px 12px; font-size: 1.2rem; border-radius:1rem 1rem 0 0 ">
     Trocar Senha
    </div>

    <div class="card-body" >
        <form action="{{action('UserController@update', Auth::user())}}" method="post">
            @csrf
    
            <input style= "height: 2.2rem"type="password" name="password" id="password" placeholder="Nova Senha">
    
            <input class = "btn btn-primary"type="submit" value="Alterar">
    
        </form>
          
    </div>
    
  </div>

<div>
    

</div>
@stop
