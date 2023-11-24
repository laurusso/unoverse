@section('titulo', 'Perfil')
@include('layout._menu') 

    <div class="engloba-logada espaco">
        <h1>Bem vindo(a), {{ Auth::user()->nome }}!</h1>
        <div class="card-logada iniciante-curioso">
            <div class="img-log">   
            <img src="{!! asset('img/user/curioso-log.png') !!}" alt="ícone do curioso">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="iniciante">Iniciante</span></h2>
                <p>Conceitos iniciais quanto a robótica e seus principais componentes. As aulas serão compostas por curiosidades do mundo tecnonógico. Bons estudos!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvCurioso.nivel', ['nivel' => 'iniciante']) }}" class="btn-curioso">Continuar</a>
            </div>
        </div>

        <div class="card-logada intermediario-curioso">
            <div class="img-log">
            <img src="{!! asset('img/user/curioso-log.png') !!}" alt="ícone do curioso">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="intermediario">Intermediário</span></h2>
                <p>Nesse nível estão disponíveis aulas, em conjunto com o Tinkercad, ensinando o uso dos principais componentes da robótica. Bons aprendizados!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvCurioso.nivel', ['nivel' => 'intermediario']) }}" class="btn-curioso" >Continuar</a>
            </div>
        </div>


        <div class="card-logada avancado-curioso">
            <div class="img-log">
            <img src="{!! asset('img/user/curioso-log.png') !!}" alt="ícone do curioso">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="avancado">Avançado</span></h2>
                <p>Repleto de desafios para quem já aprendeu um pouco de robótica! Estarão disponíveis códigos e manuais para realização de projetos diversos. Bons estudos!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvCurioso.nivel', ['nivel' => 'avancado']) }}" class="btn-curioso">Continuar</a>
            </div>
        </div>
        
    </div>
