@include('layout._menu')
<!--Para acessar essa tela colocar  /links/cadProfessor na barra do navegador-->
<div class="espaco">
<div class="form-cad cad-professor">
    <h1>Cadastre-se</h1>

   <div class="linha_titulo">
        <div class="retangulo"></div>
        <div class="bola"></div>
        <div class="bola"></div>
   </div>

    <form action="#" method="post">
        {{csrf_field() }}
        <div class="cad-items">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" autocomplete="off" required>
        </div>

        <div class="cad-items">
            <label for="nome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" autocomplete="off" required>
        </div>

        <div class="cad-items">
            <label for="nome">Email:</label>
            <input type="email" name="email" id="email"  required>
        </div>

        <div class="cad-items">
            <label for="escola">Escola:</label>
            <select name="escola" id="escola">
                 <!--Criar um forech com opções do banco-->
                <option value="escolas"> </option>
            </select>
        </div>

        <div class="cad-items">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
        </div>

        <div class="cad-items">
            <label for="senha">Confirme sua senha:</label>
            <input type="password" name="senhaTeste" id="senhaTeste" required>
        </div>

        <div class="cad-items">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" required>
        </div>

        <div class="cad-items">
            <label>Gênero:</label>
            <div class="cad-items-radio">
                <label>
                    <input type="radio" name="genero" value="masculino">
                    Masculino
                </label>
                <label>
                    <input type="radio" name="genero" value="feminino">
                    Feminino
                </label>
                <label>
                    <input type="radio" name="genero" value="nao_binario">
                    Não-binário
                </label>
                <label>
                    <input type="radio" name="genero" value="nao_informado">
                    Prefiro não dizer
                </label>
        </div>
        </div>
       

        <div class="cad-items-submit">
            <input type="submit" value="Enviar">  <!--add o caminho p/ verificacão -->
        </div>

    </form>
    <img src="{!! asset('img/cadastro/professor.svg') !!}" title=" " alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Jumper!!">

</div>
</div>

@include('layout._footer')