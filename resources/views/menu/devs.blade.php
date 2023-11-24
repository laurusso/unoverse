<!-- 
    Pagina de apresentacao dos desenvolvedores de Unoverse
 -->

<!-- CHAMADA DA DIV FIXED -->
@section('titulo', 'Devs 2023')
@include('layout._menu')
<link rel="stylesheet" href="{{ asset('css/app.css') }}"  media="screen and (max-width: 767px) and (orientation: portrait)" >  
    <div class="engloba-texto">
        <div class="texto-devs">
            <h1>Desenvolvedores 2023</h1>
            <p>O Unoverse iniciou-se em 2023 através dessa equipe de desenvolvedores, ano em que todos encontravam-se no 3º ano do ensino médio integrado ao técnico de informática no Colégio Técnico Industrial "Prof. Isaac Portal Roldán" - UNESP em Bauru. Assim, em conjunto analisaram a alta procura de escolas de Bauru em entender sobre robótica e planejaram o website de acordo com esses requisitos, com possibilidades para expansão. O principal objetivo foi de protagonizar a robótica a toda pessoa que se interesse  busque aprendizado!  </p>
        </div>
        <div class="app-texto-devs">
            <h1>Desenvolvedores 2023</h1>
            <p>Programadores da equipe III de TCC do Colégio técnico Industrial Professor Isaac Portal Roldán da turma 83A 2023</p>
        </div>


        <div class="card-roxo">
        <h2 class="nomeDevs">Laura Rodrigues Russo - líder técnica</h2>
        <h2 class="app-nomeDevs" >Laura Rodrigues Russo</h2>
        <img title="dev Laura" alt="Essa imagem não foi enontrada :/ Mas é a dev Laura!!" src="{!! asset('img/devs/laura.jpg') !!}">
        </div>
    </div>
    
    <div class="engloba-pessoas">
            <div class="card-azul">
                <img title="dev Nicole" alt="Essa imagem não foi enontrada :/ Mas é a dev Nicole!!" src="{!! asset('img/devs/nicole.jpg') !!}">
                <h2 class="legenda nomeDevs" >Nicole Emilia - programadora front</h2>
                <h2 class="app-nomeDevs" >Nicole Emilia</h2>
            </div>
  
            <div class="card-azul">
                <img title="dev Paula" alt="Essa imagem não foi enontrada :/ Mas é a dev Paula!!" src="{!! asset('img/devs/paula.jpg') !!}">
                <h2 class="legenda nomeDevs">Paula Sofia Antunes - líder gerencial</h2>
                <h2 class="app-nomeDevs" >Paula Sofia</h2>
            </div>

            <div class="card-azul">
                <img title="dev Evellyn" alt="Essa imagem não foi enontrada :/ Mas é a dev Evellyn!!" src="{!! asset('img/devs/evellyn.jpg') !!}">
                <h2 class="legenda nomeDevs">Evellyn Cipriano - programadora back</h2>
                <h2 class="app-nomeDevs" >Evellyn Cipriano</h2>
            </div>
            <div class="card-amarelo">
                <img title="dev Pedro" alt="Essa imagem não foi enontrada :/ Mas é o dev Pedro!!" src="{!! asset('img/devs/pedro.jpg') !!}">
                <h2 class="legenda nomeDevs">Pedro Kazuki Mori Hirata - auxiliar técnico</h2>
                <h2 class="app-nomeDevs" >Pedro Hirata</h2>
            </div>
            <div class="card-amarelo">
                <img title="dev Eloisa" alt="Essa imagem não foi enontrada :/ Mas é a dev Eloisa!!" src="{!! asset('img/devs/eloisa.jpg') !!}">
                <h2 class="legenda nomeDevs">Eloisa Gonçalves - gestora administrativa</h2>
                <h2 class="app-nomeDevs" >Eloisa Gonçalves</h2>
            </div>
            <div class="card-amarelo">
                <img title="dev Deborah" alt="Essa imagem não foi enontrada :/ Mas é a dev Deborah!!"src="{!! asset('img/devs/deborah.jpg') !!}">
                <h2 class="legenda nomeDevs">Deborah Campos - administrativa técnica</h2>
                <h2 class="app-nomeDevs" >Deborah Campos</h2>
            </div>
    </div>
        
    


<!-- CHAMADA DA DIV FOOTER -->
@include('layout._footer')


