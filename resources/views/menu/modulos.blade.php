<!-- 
    Visao que contem os modulos de cadastro que o site oferece: Estudante, Curioso e Professor. Estao explicados nessa propria pagina
 -->
<!-- CHAMADA DA DIV FIXED -->
@section('titulo', 'Módulos')
@include('layout._menu')
<div class="line_modo">
    <div class="caixa">
        <h1 class="titulo">Estudante</h1>
        <p> Esse modo é designado aos estudantes matriculados em alguma escola. Nesse módulo estarão disponíveis atividades no Tinkercad (uma das plataformas que simulam o uso do Arduino) e no Scratch (linguagem de blocos desenvolvida pelo MIT e de fácil aprendizagem). </p>
        <a href="{{route('links.cadEstudante')}}">Divirta-se com a programação :)</a>
    </div>
    <div class="caixa">

        <img class="imagemmodu" title="Buzzer" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Buzzer!!" src="{!! asset('img/estudante.svg') !!}">
        <img class="app-imagemmodu" title="Buzzer" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Buzzer!!" src="{!! asset('img/alunoapp.svg') !!}">
    </div>
</div>
<div class="modulos">
    <div class="line_modo">

        <div class="caixa">

            <img class="imagemmodu" title="Jumper" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Jumper!!" src="{!! asset('img/curioso.svg') !!}">
            <img class="app-imagemmodu" title="Jumper" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Jumper!!" src="{!! asset('img/curiosoapp.svg') !!}">
        </div>

        <div class="caixa">
            <h1 class="titulo">Curioso</h1>
            <p>Você alguma vez já se iteressou por robótica e não soube por onde começar? Então você está no lugar certo! Aqui os módulos são preparados para ensinar a robótica desde o início, com possibilidade de acesso a códigos já prontos e documentados. </p>
            <a href="{{route('links.cadCurioso')}}">Aproveite essa chance :)</a>
        </div>



             
            <div class="caixa">
                <h1 class="titulo">Professor</h1>
                <p> Se em algum momento na sua atuação como professor você se deparou com componentes eletrônicos desconhecidos e ficou intrigado em como são usados, esse é o seu modo! Estarão disponíveis nesse módulo materiais de estudo do Arduino e outros processos de eletrônica. Finalmente você poderá propor atividades de robótica na sua disciplina.  </p>
                <a href="{{route('links.cadProfessor')}}">Junte-se à Unoverse :)</a>
            </div>
            <div class="caixa">
                <img class="imagemmodu" title="LedZepelino" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote LedZepelino!!" src="{!! asset('img/professor.svg') !!}">
                <img class="app-imagemmodu" title="LedZepelino" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote LedZepelino!!" src="{!! asset('img/profapp.svg') !!}">
            </div>
        
    </div>



</div>

<!-- CHAMADA DA DIV FOOTER -->
@include('layout._footer')


</body>

</html>