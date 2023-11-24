@section('titulo', 'Home Adm')
@include('adm.adm_menu') 

<!--Pensar no index do adm-->
<div class="bloco-geral ">
    <div class="botoes-escolha espaco">
        <h1>Olá Administrador!!!</h1>
        <a class="btn-escolha" href="{{route('adm.adicionar')}}">Cadastro de Atividades</a>
        <a class="btn-escolha" href="{{route('adicionar.escola')}}">Cadastro de Escolas</a>  
        <a class="btn-escolha" href="{{route('adm.mostraDestino')}}">Cadastro de Questões</a>  
        <a class="btn-escolha" href="{{route('adm.lista')}}">Lista de Atividades</a>
        <a class="btn-escolha" href="{{route('adm.lista.escola')}}">Lista de Escolas</a>  
        <a class="btn-escolha" href="{{route('lista.user')}}">Lista de Usuários</a>  

    </div>
    <div class="img-adm espaco espaco">
        <img src="{!! asset('img/adm/adm-robot.svg') !!}">
    </div>
</div>
    
   

<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')