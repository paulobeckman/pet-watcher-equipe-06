<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div>
        @if(auth()->guest())
            <a href=" {{route('login')}} "> login</a>
        @endif

        @if(auth()->check())
            {{method_field('post')}}
            <a href="{{ route('logout') }} "> logout</a>
        @endif

        <a href="{{ route('register') }}"> cadastro</a>
    </div>

    @yield('content')
</body>
</html>
