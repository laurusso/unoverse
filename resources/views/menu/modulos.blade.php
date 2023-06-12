<!-- CHAMADA DA DIV FIXED -->
@include('layout._menu');
<!-- <div class="mae_modo"> -->
        <div class="line_modo">
            <div class="caixa">
                <h1 class="titulo">Estudante</h1>
                <p> O Arduino é uma ferramenta eletrônica
                    acessível a um público amplo, com ele,
                    é possivel desenvolver projetos
                    eletrônicos e explorar novas ideias e
                    soluções com programação básica :)</p>
            </div>
            <div class="caixa">
           
                <img class="imagemmodu" src="{!! asset('img/estudante.svg') !!}">    
            </div>
        </div>
        <div class="modulos">
        <div class="line_modo">

<div class="caixa">
    
    <img class="imagemmodu" src="{!! asset('img/curioso.svg') !!}">    
</div>

<div class="caixa">
    <h1 class="titulo">Curioso</h1>
    <p> O Arduino é uma ferramenta eletrônica
        acessível a um público amplo, com ele,
        é possivel desenvolver projetos
        eletrônicos e explorar novas ideias e
        soluções com programação básica :)</p>
</div>

</div>

<div class="line_modo">
<div class="caixa">
    <h1 class="titulo">Professor</h1>
    <p> O Arduino é uma ferramenta eletrônica
        acessível a um público amplo, com ele,
        é possivel desenvolver projetos
        eletrônicos e explorar novas ideias e
        soluções com programação básica :)</p>
</div>
<div class="caixa">
    
    <img class="imagemmodu" src="{!! asset('img/professor.svg') !!}">    
</div>
</div>
        </div>
        
        
       
    </div>
    

    </div>

    </div>

<!-- </div> -->

<!-- CHAMADA DA DIV FOOTER -->
@include('layout._footer')


</body>
</html>