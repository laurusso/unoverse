<!-- 
    Esse codigo foi desenvolvido durante o ano de 2023 pela equipe de numero 3 do CTI do curso de informatica, que desenvolveu a plataforma Unoverse.
    Os participantes da equipe sao: Laura Russo, Nicole Emilia, Paula Sofia Antunes, Evellyn Cipriano, Pedro Kazuki Mori Hirata, Eloisa Goncalves e Deborah Campos.
    A plataforma tem objetivo basico de capacitacao de professores da rede publica de ensino, para que possam ensinar a robótica aos seus alunos.
    A documentacao nao apresenta acentos ou caracteres especiais, pois nao ficam com boa leitura no Github ou ate mesmo no Google Drive; para acessar
    o projeto, basta entrar nesse link <https://github.com/laurusso/unoverse>. MUDAR ESSE LINK DPS
    As principais linguagens deste arquivo sao: Laravel, CSS, JavaScript, SQL (no banco de dados).
    Agradecemos a atencao e esperamos que gostem do nosso projeto!
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <!-- 
      Este primeiro arquivo representa apenas o menu, que é fixo em todas as paginas do site.
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title> <!-- TITULO DA PAGINA, PARA USA-LO EM OUTRAS PAGINAS, USAR O COMANDO DE CODIGO: 
                        @section('titulo', 'nome desejado')-->
    <!-- INSERCAO CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }} " type="text/css"> -->
        <!-- INSERCAO CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"  media="screen and (max-width: 768px) and (orientation: portrait)" >   

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- CSS para telas maiores (acima de 768px) -->
         <link rel="stylesheet" href="{{ asset('css/stylelarge.css') }}" media="only screen and (min-width: 769px)">   
    
    <!-- ICONES EXTRAIDOS DO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" 
    /> 
  </head>
<body>  
 <div class="mae">  

  <!-- INICIO DO TOPO FIXO LATERAL (OFFCANVAS EXTRAIDO DO BOOTSTRAP) -->
 <nav class="navbar navbar-dark fixed-top fixada">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('menu.home')}}"> <img src="{!! asset('img/logo.png') !!}" class="logomarca"></a> <!-- LOGO -->
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
          <a class="sol"><i id="iconetema" class="bi bi-sun-fill"></i></a> <!-- ICONE TEMA -->
        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('menu.home')}}">Home</a>
          </li>
          @if(!Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu.modulos')}}">Módulos</a>  
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu.devs')}}">Devs 2023</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu.acoes')}}">Ações</a>
          </li>
          
         


          @if (auth()->check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('perfil.atividade')}}">Atividades</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="{{route('login.perfil')}}">Meu perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login.logout')}}">Sair <i class="bi bi-box-arrow-right"></i></a>
          </li>
          <li class="nav-item">Olá {{ Auth::user()->nome }}!  </li>
          
         
         
          
         
            @else

          <li class="nav-item dropdown">
            <!-- PARA LOGAR, PODE ESCOLHER ENTRE JA CADASTRADO OU NAO CADASTRADO (DROPDOWN EXTRAIDO DO BOOTSTRAP) -->
            <a class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
              Logar
              
            </a>
    
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{{route('menu.menuCad')}}">Primeira vez</a></li> <!-- NAO CADASTRADO --> <!--Falta redirecionar o link-->
              <li><a class="dropdown-item" href="{{route('login.index')}}">Acessar sua conta</a></li> <!-- JA CADASTRADO -->
          </li>
          </ul>
        @endif
       
       
          </div>
    </div>
  </div>
  
</nav>
        <script src="{{ asset('js/script.js') }}"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <div class="body"> <!--ABERTURA DIV BODY QUE SERVE PARA TODAS AS PAGINAS-->
      


      
 