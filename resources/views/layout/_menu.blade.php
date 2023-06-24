<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    @yield('titulo') <!-- TITULO DA PAGINA, PARA USA-LO EM OUTRAS PAGINAS, USAR O COMANDO DE CODIGO: 
                        @section('titulo', 'nome desejado')-->
    <!-- INSERCAO CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }} " type="text/css">
    <!-- ICONES EXTRAIDOS DO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!--MAE
     <div class="mae-claro" id="colorir">
         TOPO FIXO
        <div class="fixed-claro" id="temaFixed">
             INSERCAO LOGOMARCA NO TOPO 
            <div class="logo-div">
                <img src="{!! asset('img/logo.png') !!}" class="logomarca">
            </div>
            INSERCAO LINKS TOPO 
            <div class="link-topo">
                <a class="linkagem" href="{{route('menu.home')}}">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="linkagem" href="{{route('menu.modulos')}}">Módulos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <a class="linkagem" href="{{route('menu.parcerias')}}">Parcerias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="linkagem" href="{{route('menu.devs')}}">Devs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="logar-cad-topo">
                <a class="linkagem">Entrar</a> 
                <a class="sol" href=""><i class="bi bi-person"></i></a> User
                <a id="btnCadastro">Cadastrar</a>
                <a class="sol" id="troca"><i id="iconetema" class="bi bi-sun-fill" onclick="trocarCores()"></i></a> Sol
            </div>
        </div> FIM FIXED--> 
<!-- ABERTURA DA DIV MAE -->
 <div class="mae-claro" id="colorir">
  <!-- INICIO DO TOPO FIXO LATERAL (OFFCANVAS EXTRAIDO DO BOOTSTRAP) -->
 <nav class="navbar navbar-dark fixed-top fixada">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="{!! asset('img/logo.png') !!}" class="logomarca"></a> <!-- LOGO -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Unoverse Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li>
          <a class="sol" id="troca"><i id="iconetema" class="bi bi-sun-fill"></i></a> <!-- ICONE TEMA -->
        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('menu.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu.modulos')}}">Módulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu.parcerias')}}">Parcerias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu.devs')}}">Devs</a>
          </li>
          <li class="nav-item dropdown">
            <!-- PARA LOGAR, PODE ESCOLHER ENTRE JA CADASTRADO OU NAO CADASTRADO (DROPDOWN EXTRAIDO DO BOOTSTRAP) -->
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Logar
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Primeira vez</a></li> <!-- NAO CADASTRADO -->
              <li><a class="dropdown-item" href="{{route('menu.entrar')}}">Acessar sua conta</a></li> <!-- JA CADASTRADO -->
          </li>
        </ul>
        <!-- UMA BARRA DE PESQUISA *********** NAO SEI SE USAREMOS SO DEIXEI AI -->
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
        <script src="{{ asset('js/script.js') }}"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <div class="body">
      


      
