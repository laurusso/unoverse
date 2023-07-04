<!-- CHAMADA DA DIV FIXED -->
@include('layout._menu')
<!-- <div class="mae_modo"> -->
<div class="line_modo">
    <div class="caixa">
        <h1 class="titulo">Estudante</h1>
        <p> Esse modo é designado aos estudantes matriculados em alguma escola. Nesse módulo estarão disponíveis atividades junto ao Tinkercad, a plataforma de simulação do Arduino, e ao Scratch, plataforma do MIT voltada a programação em blocos. </p>
        <a href="">Divirta-se com a programação :)</a>
    </div>
    <div class="caixa">

        <img class="imagemmodu" title="Buzzer" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Buzzer!!" src="{!! asset('img/estudante.svg') !!}">
    </div>
</div>
<div class="modulos">
    <div class="line_modo">

        <div class="caixa">

            <img class="imagemmodu" title="Jumper" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Jumper!!" src="{!! asset('img/curioso.svg') !!}">
        </div>

        <div class="caixa">
            <h1 class="titulo">Curioso</h1>
            <p>Você alguma vez já se iteressou por robótica e não soube por onde começar? Então você está no lugar certo! Aqui os módulos são preparado para para ensinar a robótica do zero, com possibilidade de acesso a códigos já prontos e documentados. </p>
            <a href="">Aproveite essa chance :)</a>
        </div>



        <div class="line_modo">
            <div class="caixa">
                <h1 class="titulo">Professor</h1>
                <p> Se em algum momento na sua atuação como professor você passou por uma sala com componentes eletrônicos desconhecidos e ficou intrigado pelo não uso desses, esse é o seu modo! Estarão disponíveis nesse módulo materiais de estudo quanto ao Arduino e outros processos de eletrônica, assim você finalmente poderá mostrar aos seus alunos como utilizá-los. </p>
                <a href="">Junte-se à Unoverse :)</a>
            </div>
            <div class="caixa">

                <img class="imagemmodu" title="LedZepelino" alt="Essa imagem não foi encontrada :/ Mas é o robô mascote LedZepelino!!" src="{!! asset('img/professor.svg') !!}">
            </div>
        </div>
    </div>



</div>




<!-- </div> -->

<!-- CHAMADA DA DIV FOOTER -->
@include('layout._footer')


</body>

</html>