<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pet Watcher - @yield('titulo')</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body style="background-color: #CEDEE5">

<nav class="navbar navbar-expand-lg" style = "background:#15c3d6">
    <div class="container-fluid">
      <a class="navbar-brand" style = "color: white; padding: 24px 12px" href="/">Pet Watcher</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse tex:" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item">
            @if(isset(Auth::user()->tipo_conta))
            @if(Auth::user()->tipo_conta == 0)

                    <a style = "color: white" class = "nav-link active" aria-current="page" href="{{ route('credenciada.index')}}">Gestão de Credenciadas</a>
  
            @endif
            @endif
          </li>

          <li class="nav-item">
            @if(isset(Auth::user()->tipo_conta))
                @if(Auth::user()->tipo_conta == 2)
                <div>
                    <div>
                        <a style = "color: white" href="{{ route('empregado.index')}}">Gestão de Proprietários</a>
                    </div>
                </div>
                @endif
            @endif
         </li>

          
        
          @if(auth()->check())
          <li class="nav-item dropdown">
            <a style = "color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mais
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li>
                @if(isset(Auth::user()->tipo_conta))
                @if(Auth::user()->tipo_conta == 0)
                <a class = "dropdown-item" href="{{ route('reset')}}"> Trocar senha</a>
                @endif
                @endif   
            </li>
              
              <li><hr class="dropdown-divider"></li>
              
              <li class="nav-item">    
                <a class = "dropdown-item" href="{{ route('logout') }} "> Logout</a>
              </li>

            </ul>
          </li>

          @endif


          
        </ul>
      </div>
    </div>
  </nav>



    @if(isset(Auth::user()->name))
    <p>
        Bem vindo: {{Auth::user()->name}}
    </p>
    @endif




    @yield('content')

    
    <div>
      @if(auth()->guest())
      <a class="btn btn-primary"href=" {{route('login')}} "> Fazer login</a>
      @endif
    </div>
  


</body>

</html>
