<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{url('assets/login.css')}}" rel="stylesheet">
    <link href="{{url('assets/create-especie.css')}}" rel="stylesheet">
</head>

<body>

    <div>
        @if(auth()->guest())
        <a href=" {{route('login')}} "> login</a>
        @endif

        @if(auth()->check())
        {{method_field('get')}}
        <div >
            <a href="{{ route('logout') }} "> logout</a>
            <a href="{{ route('reset')}}"> troca senha</a>
            <a href="{{ route('credenciada.index')}}">gestão de credenciadas</a>
        </div>

        @endif

        <a href="#"> cadastro</a>
    </div>

    @yield('content')
</body>

</html>
