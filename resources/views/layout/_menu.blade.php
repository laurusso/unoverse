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
    <title>@yield('fixada')</title>
</head>
<body>
    <!--MAE-->
    <div class="mae">
        <!--TOPO FIXO-->
        <div class="fixed">
            <!--INSERCAO LOGOMARCA NO TOPO-->
            <div class="logo-div">
                <img src="{!! asset('img/logo.png') !!}" class="logomarca">
            </div>
            <!--INSERCAO LINKS TOPO-->
            <div class="link-topo">
                <a class="linkagem" href="{{route('menu.home')}}">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="linkagem" href="{{route('menu.modulos')}}">Módulos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <a class="linkagem" href="{{route('menu.parcerias')}}">Parcerias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="linkagem" href="{{route('menu.devs')}}">Devs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="logar-cad-topo">
                <a class="icon1">Entrar</a> 
                <span class="material-symbols-outlined">person</span> <!--User-->
                <a id="btnCadastro">Cadastrar</a>
                <span class="material-symbols-outlined">sunny</span> <!--Sol-->
            </div>
             <!-- COMO CHAMAR A LUA QUANDO PRECISAR 
                <span class="material-symbols-outlined">clear_night</span> --> 
        </div> <!--FIM FIXED-->
      
