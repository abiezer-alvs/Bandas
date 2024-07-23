<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('titulo')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtABPbF73prahjElDnZPfWVV3y5JyOcDibpapm4WF3pUfQgVLLemhmbLBxa2_PnT_Fers&usqp=CAU"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    @section('menu')
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="nav nav-justified">
                            <li class="nav-item"> 
                                @yield('usuario')             
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto"> 
                            <li class="nav-item">
                                @yield('pagina') 
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
        <br>
    @show

    <div class="container">
        @yield('conteudos')
        @yield('bandas')
        @yield('form')
    </div>
</body>
</html>
