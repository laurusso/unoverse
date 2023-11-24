@section('titulo', 'Cadastro Estudante')
@include('layout._menu')

<!--Para acessar essa tela colocar  /links/cadEstudante na barra do navegador-->
<div class="espaco">
    <div class="form-cad cad-estudante">
        <h1>Cadastre-se</h1>

        <div class="linha_titulo">
                <div class="retangulo"></div>
                <div class="bola"></div>
                <div class="bola"></div>
        </div>
    <!-- rota registrar ***lembrar -->
        <form action="{{route('registrar')}}" method="post" enctype="multipart/form-data" >
            {{csrf_field() }}
            <div class="cad-items">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" autocomplete="off" value="" required>
            </div>

            <div class="cad-items">
                <label for="nome">Sobrenome:</label>
                <input type="text" name="sobrenome" id="sobrenome" autocomplete="off"value="" required>
            </div>

            <div class="cad-items">
                <label for="nome">Email:</label>
                <input type="email" name="email" id="email" value="" required>
            </div>
 
            <div class="cad-items">
                <label for="escola">Escola:</label>
               
                <select name="codescola" id="escola" required>
                    <!--Criar um forech com opções do banco-->
                    <option value="" data-default disabled selected></option> 
                    @foreach($escola as $esc)
                    <option value="{{$esc->codigo_escola}}">{{$esc->nome_escola}}</option>
                   
                    @endforeach
                </select>
            </div>

            <div class="cad-items senha-size">
                <div class="container-senha">
                    <label for="senha">Senha:</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" id="senha" required> <i id="olho" class="bi bi-eye-slash"></i>
                    </div>
                </div>
            </div>

            <div class="cad-items">
                <label for="senha">Confirme sua senha:</label>
                <div class="input-wrapper">
                        <input type="password" name="password-confirmation" id="senha" required> <i id="olho" class="bi bi-eye-slash"></i>
                    </div>
            @error('password')
            <span class="text-error">{{ $message }}</span>
            @enderror
            @error('password-confirmation')
            <span class="text-error">{{ $message }}</span>
            @enderror
            </div>


            <div class="cad-items">
                <label for="foto">Foto:</label>
              
                <input type="file" name="foto" id="foto">

            </div>

            <div class="cad-items">
                <label>Gênero:</label>
                <div class="cad-items-radio">
                    <label>
                        <input type="radio" name="genero" value="masculino"  required>
                        Masculino
                    </label>
                    <label>
                        <input type="radio" name="genero" value="feminino" required>
                        Feminino
                    </label>
                    <label>
                        <input type="radio" name="genero" value="nao_binario"  required>
                        Não-binário
                    </label>
                    <label>
                        <input type="radio" name="genero" value="nao_informado" required>
                        Prefiro não dizer
                    </label>

                    <input type="hidden" name="curioso" value="false">
                    <input type="hidden" name="typeuser" value="aluno">
            </div>
            </div>
        
             
            <div class="cad-items-submit"> 
                <input type="submit" value="Enviar" class="envia">  <!--add o caminho p/ verificacão -->
            </div>

        </form>
        <script src="{{ asset('js/eye.js') }}"></script> 
        <img src="{!! asset('img/cadastro/estudante.svg') !!}" title=" " alt="Essa imagem não foi encontrada :/ Mas é o robô mascote Jumper!!">
        
    </div>
    </div>
</div>
 




<!-- voce preisa fazer um novo controlador proxima aula-> chamar cadastros  -->