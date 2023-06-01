<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- INSERCAO CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }} " type="text/css"> 
    <!-- ICONE USER -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- ICONE SOL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- ICONE LUA -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Unoverse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!--MAE-->
     <div class="mae">
        <!-- TOPO FIXO -->
        <div class="fixed">
            <!-- INSERCAO LOGOMARCA NO TOPO -->
            <div class="logo-div">
                <img src="{!! asset('img/logo.png') !!}" class="logomarca">
            </div>
            <!-- INSERCAO LINKS TOPO -->
            <div class="link-topo">
                <a class="linkagem" href="{{route('menu.home')}}">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="linkagem" href="{{route('menu.modulos')}}">Módulos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <a class="linkagem" href="{{route('menu.parcerias')}}">Parcerias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="linkagem" href="{{route('menu.devs')}}">Devs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="logar-cad-topo">
                <a class="linkagem">Entrar</a> 
                <a class="sol"href=""><i class="bi bi-person"></i></a> <!--User-->
                <a id="btnCadastro">Cadastrar</a>
                <a class="sol" id="troca"><i id="icone-tema" class="bi bi-sun-fill"></i></a> <!--Sol-->
            </div>
        </div> <!--FIM FIXED--> 


<!-- 
<nav class="navbar navbar-expand-lg topo" >
    <div class="container-fluid">
     <img src="{!! asset('img/logo.png') !!}" class="logomarca"> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link cor" aria-current="page" href="{{route('menu.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cor" href="{{route('menu.modulos')}}">Módulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cor" href="{{route('menu.parcerias')}}">Parcerias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cor" href="{{route('menu.devs')}}">Devs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cor" href="#">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cor" href="#">Cadastrar </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <script src="{{ asset('js/script.js') }}"></script> 
  <div class="body">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


      
