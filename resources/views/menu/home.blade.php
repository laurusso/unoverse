 <!--
    Pagina inicial do site (a home)
   -->
        <!-- CHAMADA DA DIV FIXED -->
        @section('titulo', 'Home')
        @include('layout._menu')
        <div class="janela-modal" id="janela-modal">
                <div class="modal">
                    <h1 class="PlacaUno-Modal">Placa Uno</h1>
                    <img src="{!! asset('img/Placa_Uno_Modal.svg') !!}" alt="">
                    <p>A Placa Uno é a uma placa controladora baseada no ATmega328 destinado a estudantes e profissionais da área de eletrônica para desenvolver seus projetos de forma mais fácil que as plataformas de programação padrão, além de possuir grande quantidade de portas lógicas e compatibilidade com os Shields Arduino.</p>
                </div>
        </div>     

            <!-- Slideshow container -->
            <div class="container-slide">
                <div class="slides">
                    <input type="radio"  name="slide" id="slide1">
                    <input type="radio"   name="slide" id="slide2">
                    <input type="radio"   name="slide" id="slide3">

                    <div class="slide s1">
                        <img src="{!! asset('img/robotica.png') !!}">
                    </div>

                    <div class="slide">
                        <img src="{!! asset('img/um.jpg') !!}">
                    </div>

                    <div class="slide">
                        <img src="{!! asset('img/robo.png') !!}">
                    </div>

                </div>

                <div class="navigation">
                    <label class="dot" for="slide1"></label>
                    <label class="dot" for="slide2"></label>
                    <label class="dot" for="slide3"></label>    
                </div> 

             </div><!--acaba slider -->
             
             <div id="carouselExampleCaptions" class="carousel slide">
            
             
            <div class="video">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/SigIbCVMTzU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="bolas">
                    <img src="{!! asset('img/bolas_azuis.png') !!}" id="bolas_azuis">
                    <img src="{!! asset('img/bolas_amarelas.png') !!}"  id="bolas_amarelas">
                </div>
                <p>O Unoverse é um curso de robótica com arduíno que comtempla desde alunos de escolas públicas a professores e qualquer um interessado em adentrar o universo da tecnologia e programação de maneira acessível e divertida</p>
            </div>

            <div class="arduino_info">
                <h2><b>Conheça o Arduíno</b></h2>
                <div class="componentes">
                    <a href="#">
                        <img src="{!! asset('img/Placa_Uno.svg') !!}" alt="">
                    </a>
                    <a href="#">
                        <img src="{!! asset('img/Protoboard.svg') !!}" alt="">
                    </a>
                    <a href="#">
                        <img src="{!! asset('img/Jumpers.svg') !!}" alt="">
                    </a>
                     
                </div>
                <img src="{!! asset('img/wave_home.svg') !!}" id="wave_home">
                

            </div>
            
             
        <!-- CHAMADA DA DIV FOOTER -->
        @include('layout._footer')

       
</body>
</html>