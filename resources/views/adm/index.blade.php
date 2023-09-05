@section('titulo', 'Home Adm')
@include('adm.adm_menu') 

<!--Pensar no index do adm-->
<div class="bloco-geral">
    <div class="botoes-escolha">
        <h1>Olá Administrador!!!</h1>
        <a class="btn-escolha" href="{{route('adm.adicionar')}}">Cadastro de Atividades</a>
        <a class="btn-escolha" href="{{route('adm.lista')}}">Lista de Atividades</a>
        <a class="btn-escolha" href="{{route('adm.lista')}}">Lista de Usuários</a>  <!--mudar link-->
    </div>
    <div class="img-adm">
    <img src="{!! asset('img/adm/adm-robot.svg') !!}">
    </div>
</div>
    
   

<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')