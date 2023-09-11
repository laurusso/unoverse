@section('titulo', 'Cadastro Curioso')
@include('layout._menu')

<!--Para acessar essa tela colocar  /links/cadCurioso na barra do navegador-->
<div class="espaco">
<div class="form-cad cad-curioso">
    <h1>Cadastre-se</h1>

   <div class="linha_titulo">
        <div class="retangulo"></div>
        <div class="bola"></div>
        <div class="bola"></div>
   </div>

    <form action="{{route('cadastrar')}}" method="post">
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
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" required>
        </div>

        <div class="cad-items">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required> <i id="olho" class="bi bi-eye-slash"></i></input>
        </div>

        <div class="cad-items">
            <label for="senha">Confirme sua senha:</label>
            <input type="password" name="senhaTeste" id="senhaTeste" required>
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
                <input type="hidden" name="curioso" value="true">
                <input type="hidden" name="type_user" value="curioso">
        </div>
        </div>
       
        <div class="cad-items-submit sbm-curioso ">
            <input type="submit" class="envia" value="Enviar">  <!--add o caminho p/ verificacão -->
        </div>

    </form>

    <script src="{{ asset('js/teste.js') }}"></script> 
    <img src="{!! asset('img/cadastro/curioso.svg') !!}" title=" " alt="Essa imagem não foi encontrada :/ Mas é o robô mascote !!">

</div>
</div>


@include('layout._footer')