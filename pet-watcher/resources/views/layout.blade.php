<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{url('assets/login.css')}}" rel="stylesheet">
    <link href="{{url('assets/create-especie.css')}}" rel="stylesheet">
    <link href="{{url('assets/tabela.css')}}" rel="stylesheet">
</head>

<body>

    <div>
        @if(auth()->guest())
        <a href=" {{route('login')}} "> login</a>
        @endif

        @if(auth()->check())
        <a href="{{ route('logout') }} "> logout</a>
        @endif

    </div>

    @if(isset(Auth::user()->name))
    <p>
        Bem vindo: {{Auth::user()->name}}
    </p>
    @endif


    @if(isset(Auth::user()->tipo_conta))
    @if(Auth::user()->tipo_conta == 2)
    <div>
        <div>
            <a href="{{ route('empregado.index')}}">gestão de Proprietarios</a>
        </div>
    </div>
    @endif
    @endif



    @if(isset(Auth::user()->tipo_conta))
    @if(Auth::user()->tipo_conta == 0)

    <div>

        <div>
            <a href="{{ route('reset')}}"> troca senha</a>
            <a href="{{ route('credenciada.index')}}">gestão de credenciadas</a>
        </div>

    </div>
    @endif
    @endif



    @yield('content')


</body>

</html>
