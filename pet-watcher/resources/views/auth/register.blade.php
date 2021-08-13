@extends('layout')

@section('content')

<nav id = "menu">
    <ul>
        <li><a href = "#">Cadastro</a></li>
        <li><a href = "#">Espécie</a></li>
        <li><a href = "#">Consulta</a></li>
        <li><a href = "#">Licença</a></li>
        <li><a href = "#">Alterar Senha</a></li>
        <li><a href = "#">Logout</a></li>
    </ul>
</nav>

<form action="{{ route('register') }}" method="post">
    @csrf
    <div id="page-create-user">
        <main>


            <fieldset>
            <div class="input-block">
                <input id="name" type="text"  name="name" placeholder="Nome">
            </div>

            <div class="input-block">
                <input id="email" type="email"  name="email" placeholder="Email">
            </div>

            <div class="input-block">
                <input id="password" type="password" name="password" placeholder="Senha">
            </div>

            <div class="input-block">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar Senha">
            </div>
         
            <button type="submit" class = "primary-button">Cadastrar</button>
            </fieldset>
        </main>
    </div>
   

</form>

@stop
