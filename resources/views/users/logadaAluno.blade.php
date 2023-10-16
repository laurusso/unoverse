@section('titulo', 'Perfil')
@include('layout._menu') 

    <div class="engloba-logada espaco">
        <h1>Bem vindo(a), {{ Auth::user()->nome }}!</h1>
        <div class="card-logada iniciante-estudante">
            <div class="img-log">   
                <img src="{!! asset('img/user/estudante-log.png') !!}" alt="ícone do estudante">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="iniciante">Iniciante</span></h2>
                <p>Conceitos iniciais quanto ao uso do Arduino. As aulas serão guiadas pelo uso do Tinkercad, então, não é necessário os componentes físicos em mãos. Bons estudos!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvAluno.nivel', ['nivel' => 'iniciante']) }}" class="btn-estudante">Continuar</a>
            </div>
        </div>

        <div class="card-logada intermediario-estudante">
            <div class="img-log">
                <img src="{!! asset('img/user/estudante-log.png') !!}" alt="ícone do estudante">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="intermediario">Intermediário</span></h2>
                <p>Uma apresentação um pouco mais profunda sobre os conceitos do uso do Arduino. As aulas são guiados pelo uso do Tinkercad, então, não é necessário os componentes físicos em mãos. Bons aprendizados!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvAluno.nivel', ['nivel' => 'intermediario']) }}" class="btn-estudante">Continuar</a>
            </div>
        </div>


        <div class="card-logada avancado-estudante">
            <div class="img-log">
                <img src="{!! asset('img/user/estudante-log.png') !!}" alt="ícone do estudante">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="avancado">Avançado</span></h2>
                <p>Uma aventura para quem já explorou a robótica antes e tem um conhecimento prévio! As aulas são guiaas pelo uso do Tinkercad, então, não é necessário os componentes físicos em mãos. Bons estudos!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvAluno.nivel', ['nivel' => 'avancado']) }}" class="btn-estudante">Continuar</a>
            </div>
        </div>
        
    </div>

    @include('layout._footer') 