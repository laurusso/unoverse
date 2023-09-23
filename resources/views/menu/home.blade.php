 <!--
    Pagina inicial do site (a home)
   -->
        <!-- CHAMADA DA DIV FIXED -->
        @section('titulo', 'Home')
        @include('layout._menu')
            <!-- Slideshow container -->
            <div class="container-slide">
                <div class="slides">
                    <input type="radio"  name="slide" id="slide1">
                    <input type="radio"   name="slide" id="slide2">
                    <input type="radio"   name="slide" id="slide3">

                    <div class="slide s1">
                        <img src="{!! asset('img/home/slide1.jpg') !!}">
                    </div>

                    <div class="slide">
                        <img src="{!! asset('img/home/slide2.jpg') !!}">
                    </div>

                    <div class="slide">
                        <img src="{!! asset('img/home/slide3.jpg') !!}">
                    </div>

                    <div class="navigation">
                                        <label class="dot" for="slide1"></label>
                                        <label class="dot" for="slide2"></label>
                                        <label class="dot" for="slide3"></label>    
                    </div> 
                </div>

                

             </div><!--acaba slider -->
             
             <div id="carouselExampleCaptions" class="carousel slide">
            
             
            <div class="video">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/SigIbCVMTzU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="bolas">
                    <img src="{!! asset('img/bolas_azuis.png') !!}" id="bolas_azuis">
                    <img src="{!! asset('img/bolas_amarelas.png') !!}"  id="bolas_amarelas">
                </div>
                <div class="app_bolas">
                    <img src="{!! asset('img/app_bolas_azuis.svg') !!}" id="app_bolas_azuis">
                    <img src="{!! asset('img/app_bolas_amarelas.svg') !!}"  id="app_bolas_amarelas">
                </div>
                <p>O Unoverse é um curso de robótica com arduíno que contempla desde alunos de escolas públicas a professores e qualquer um interessado em adentrar o universo da tecnologia e programação de maneira acessível e divertida</p>
            </div>

            <div class="arduino_info">
                <h2><b>Conheça o Arduíno</b></h2>
                <div class="componentes">
                
                    <a href="#" onclick="abrirModal_Placa_Uno()">
                        <img src="{!! asset('img/Placa_Uno.svg') !!}" alt="">
                    </a>
                    <a href="#" onclick="abrirModal_Protoboard()">
                        <img src="{!! asset('img/Protoboard.svg') !!}" alt="">
                    </a>
                    <a href="#" onclick="abrirModal_Jumpers()">
                        <img src="{!! asset('img/Jumpers.svg') !!}" alt="">
                    </a>
                 </div>
                 
            </div>
           
            
            <div class="texto_info">
                        <p>O Arduino é uma plataforma de prototipagem eletrônica muito versátil e amplamente utilizada por estudantes, hobbistas e profissionais das mais diversas áreas. Ele consiste em uma placa de circuito impresso com um microcontrolador e uma série de pinos de entrada e saída, que permitem a conexão e controle de sensores, botões, LEDs, motores e outros dispositivos eletrônicos.</p>
                        <img src="{!! asset('img/Arduino_Exemplo.jpg') !!}">
                        <p>Uma das principais características do Arduino é a sua facilidade de uso e programação. Ele possui uma linguagem de programação própria baseada em C/C++, que é bastante intuitiva e acessível mesmo para iniciantes. Além disso, existem diversas bibliotecas e exemplos disponíveis que facilitam o desenvolvimento de projetos.</p>

                </div> 
                <img src="{!! asset('img/wave_home.svg') !!}" id="wave_home">

        <!-- CHAMADA DA DIV FOOTER -->
        @include('layout._footer')

       
</body>
<div class="janela-modal-placa-uno" id="janela-modal-placa-uno">
                <div class="modal">
                    <button class="fechar" id="fechar"><b>X</b></button>
                    <h1>Placa Uno</h1>
                    <div class="conteudo_modal">
                        <img src="{!! asset('img/Placa_Uno_Modal.png') !!}" alt="">
                        <p>A Placa Uno é a uma placa controladora baseada no ATmega328 destinado a estudantes e profissionais da área de eletrônica para desenvolver seus projetos de forma mais fácil que as plataformas de programação padrão, além de possuir grande quantidade de portas lógicas e compatibilidade com os Shields Arduino.</p>
                    </div>
                   
                </div>
            
 </div> 

 <div class="janela-modal-protoboard" id="janela-modal-protoboard">
 <div class="modal">
                    <button class="fechar" id="fechar"><b>X</b></button>
                    <h1>Protoboard</h1>
                    <div class="conteudo_modal">
                        <img src="{!! asset('img/Protoboard_Modal.png') !!}" alt="">
                        <p>Com uma protoboard é possível construir protótipos de projetos ou ensaiar circuitos, pois, sendo ela uma matriz de contato reutilizável, evitamos a necessidade de confeccionar uma placa de circuito impresso e possibilitando a fácil alteração do circuito, deixando ele flexível.</p>
                    </div>
                   
                </div>
 </div>

 <div class="janela-modal-jumpers" id="janela-modal-jumpers">
 <div class="modal">
                    <button class="fechar" id="fechar"><b>X</b></button>
                    <h1>Jumpers</h1>
                    <div class="conteudo_modal">
                        <img src="{!! asset('img/Jumpers_Modal.png') !!}" alt="">
                        <p>Os jumpers são cabos ou fios elétricos com pontas devidamente preparadas para fazer as conexões elétricas entre os componentes de um circuito possibilitando a condução eletricidade ao longo do mesmo.</p>
                    </div>
                   
                </div>
 </div>
 <script src="{{ asset('js/script.js') }}"></script>    
</html>