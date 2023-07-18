<!-- 
    Aquivo que contem as configuracoes para logar-se no site, caso ja tenha conta
 -->

@include('layout._menu')

<div class="form_entrar">
    <h1>Entrar</h1>

   <div class="linha_titulo">
        <div class="retangulo"></div>
        <div class="bola"></div>
        <div class="bola"></div>
   </div>

    <form action="#" method="post">
        {{csrf_field() }}
        <div class="form-itens">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
        </div>
        <div class="form-itens">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
        </div>

        <div class="form-btn">
            <label><input type="submit"> Entrar</label> <!--add o caminho p/ verificacão -->
        </div>
         <div class="form-btn">
           <a href="add link de cadastro" alt="Ir para cadastro">Cadastrar</a>
        </div>
    </form>
</div>



@include('layout._footer')
