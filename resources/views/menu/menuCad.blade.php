@section('titulo', 'Cadastrar')
        @include('layout._menu')
<div class="espaco escolha">
    <h1>Escolha sua categoria!</h1>
</div>
<div class="cards_cadastro">

    <div class="estudante">
        <div class="imagem_cad">
            <img src="{!! asset('img/Estudante_Cad.svg') !!}" class="img-cad" alt="Buzzer">
        </div>
        <div class="botao_modulo">
        <a href="{{route('links.cadEstudante')}}">Estudante</a>
        </div>
    </div>

    <div class="curioso">
        <div class="imagem_cad">
            <img src="{!! asset('img/Curioso_Cad.svg') !!}" class="img-cad" alt="Jumper">
        </div>
    <div class="botao_modulo">
        <a href="{{route('links.cadCurioso')}}">Curioso</a>
        </div>
    </div>

    <div class="professor">
        <div class="imagem_cad">
            <img src="{!! asset('img/Professor_Cad.svg') !!}" class="img-cad" alt="LED">
        </div>
        <div class="botao_modulo">
            <a href="{{route('links.cadProfessor')}}">Professor</a>
        </div>

    </div>
</div>