
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- 
      Este arquivo representa apenas o menu para administrador
   -->
    <meta charset="UTF-8">
    @yield('titulo') <!-- TITULO DA PAGINA, PARA USA-LO EM OUTRAS PAGINAS, USAR O COMANDO DE CODIGO: 
                        @section('titulo', 'nome desejado')-->
    <!-- INSERCAO CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }} " type="text/css">
    <!-- ICONES EXTRAIDOS DO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
</head>
<body>
   
<!-- ABERTURA DA DIV MAE -->
 <div class="mae">
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

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('adm.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('adm.lista')}}">Lista</a>
          </li>
          @if (auth()->check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('login.perfil')}}">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login.logout')}}">Logout</a>
          </li>
         
           <p>Olá {{ Auth::user()->nome }} </p>
          @endif
         
        </ul>
        
      </div>
    </div>
  </div>
</nav>
        <script src="{{ asset('js/script.js') }}"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <div class="body"> <!--ABERTURA DIV BODY QUE SERVE PARA TODAS AS PAGINAS-->
      


      
 