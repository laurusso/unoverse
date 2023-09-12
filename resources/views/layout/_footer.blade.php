<!-- 
    Esta visao é o footer, presente em todas as paginas do site.
 -->
</div> <!--FIM DE DIV BODY-->
<!-- INICIO DE DIV FOOTER -->
    <div class="footer">
      <div class="logo-space">
        <a href="#"> <img src="{!! asset('img/logo.png') !!}" class="logomarca"></a> <!-- LOGO -->
      </div>
      <div class="conteudo">
        <div class="menu-footer">
          <h4>Menu</h4>
            <p><a href="{{route('menu.home')}}">Home</a></p>
            <p><a href="{{route('menu.modulos')}}">Módulos</a></p>
            <p><a href="{{route('menu.acoes')}}">Ações</a></p>
            <p><a href="{{route('menu.devs')}}">Devs</a></p>
        </div>
        <div class="social">
          <h4>Social</h4>
          <p>
            <a href="https://github.com/laurusso/unoverse" target="_blank"
              ><i class="fab fa-github"></i> Github</a
            >
          </p>
          <p>
            <a href="" target="_blank"
              ><i class="bi bi-youtube"></i> Youtube</a
            >
          </p>
          <p>
            <a href="https://instagram.com/projeto_unoverse" target="_blank"
              ><i class="fab fa-instagram"></i> Instagram</a
            >
          </p>
        </div>
        <div class="links">
          <h4>Outros contatos</h4>
          <a href="https://cti.feb.unesp.br" target="_blank"> <img src="{!! asset('img/cti.png') !!}" class="logomarca"></a> 
        </div>
        <div class="detalhes">
          <h4>Email</h4>
          <p>unoverse@projetoscti.com.br</p>
          <a href="#" class="voltar">Voltar ao topo <i class="bi bi-arrow-up"></i></a>
        </div>
      </div>
      <footer>
        <hr />
        Programe, inove, construa!
      </footer>
    </div>
  </body>
</html>

</div> <!--FIM MAE-->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>