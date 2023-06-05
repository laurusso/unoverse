</div>
<footer class="bottom-claro" id="footer">
    <div class=envolve-parte1>
        <div class="envolve-logo">
            <img src="{!! asset('img/logo.png') !!}" class="logomarca">
        </div>
        <div class="envolve-links"> 
            <a class="linkagem-footer lacuna" href="{{route('menu.home')}}">Home</a>
            <a class="linkagem-footer" href="{{route('menu.modulos')}}">Módulos</a>
            <a class="linkagem-footer" href="{{route('menu.parcerias')}}">Parcerias</a>
            <a class="linkagem-footer" href="{{route('menu.devs')}}">Devs</a>
        </div>
    </div>
    <div>
    <div class="envolve-parte1">
        <a class="linkagem">Entrar</a> 
        <a class="sol" href=""><i class="bi bi-person"></i></a> <!--User-->
        <a id="btnCadastro">Cadastrar</a>
        <a class="sol" id="troca"><i id="iconetema" class="bi bi-sun-fill" onclick="trocarCores()"></i></a> <!--Sol-->
    </div>
    </div>
</footer>

</div> <!--FIM MAE-->
</body>
</html>