@section('titulo', 'Cadastrar')
        @include('layout._menu')


@if(session('user_semCad'))
<script>
    alert("{{ session('user_semCad') }}");
</script>
@endif

<div class="espaco escolha">
    <h1>Escolha sua categoria!</h1>
</div>
<div class="cards_cadastro">

    <div class="estudante">
        <div class="imagem_cad">
            <img src="{!! asset('img/cadastro/Estudante_Cad.svg') !!}" class="img-cad" alt="Buzzer">
            <img src="{!! asset('img/cadastro/app/app_EstudanteCad.svg') !!}" class="app-img-cad" alt="Buzzer">
        </div>
        <div class="botao_modulo">
        <a href="{{route('links.cadEstudante')}}">Estudante</a>
        </div>
    </div>

    <div class="curioso">
        <div class="imagem_cad">
            <img src="{!! asset('img/cadastro/Curioso_Cad.svg') !!}" class="img-cad" alt="Jumper">
            <img src="{!! asset('img/cadastro/app/app_CuriosoCad.svg') !!}" class="app-img-cad" alt="Jumper">
        </div>
    <div class="botao_modulo">
        <a href="{{route('links.cadCurioso')}}">Curioso</a>
        </div>
    </div>
 
    <div class="professor">
        <div class="imagem_cad">
            <img src="{!! asset('img/cadastro/Professor_Cad.svg') !!}" class="img-cad" alt="LED">
            <img src="{!! asset('img/cadastro/app/app_ProfessorCad.svg') !!}" class="app-img-cad" alt="LED">
        </div>
        <div class="botao_modulo">
            <a href="{{route('links.cadProfessor')}}">Professor</a>
        </div>

    </div>
</div>