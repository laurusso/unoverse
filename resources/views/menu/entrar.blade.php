<!-- 
    Aquivo que contem as configuracoes para logar-se no site, caso ja tenha conta
 -->
 @section('titulo', 'Login')
@include('layout._menu')

<div class="espaco">
    <!-- temporario messagem de error -->
  
    @if(session()->has('success'))
        {{ session()->get('success') }} 
    @endif

    @if (Auth::check())

       
        <p>Olá {{ Auth::user()->nome }}</p>  
        <a href="{{route('login.logout')}}" >logout </a>


        </div>
      
     @else 
  @error('error')
        <span>{{ $message }} </span>
    @enderror

        <div class="form_entrar">
        <h1>Entrar</h1>

        
    <div class="linha_titulo">
            <div class="retangulo"></div>
            <div class="bola"></div>
            <div class="bola"></div>
    </div>

        <form action="{{route('login.login')}}" method="post">  
            {{csrf_field() }}
            <div class="form-itens">
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" autocomplete="off" >
                @error('email')
                    <span>{{ $message }} </span>
                @enderror
            </div>
            <div class="form-itens">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha"> <i id="olho" class="bi bi-eye-slash"></i>
                <!-- <a class="olhoCor"><i id="olho" class="bi bi-eye"></i></a> -->
                @error('senha')
                    <span>{{ $message }} </span>
                @enderror
            </div>

            <div class="form-btn">
                <label><input type="submit"> Entrar</label> <!--add o caminho p/ verificacão -->
            </div>
            <div class="form-btn">
            <a href="add link de cadastro" alt="Ir para cadastro">Cadastrar</a>
            </div>
        </form> @endif
    </div>
</div>
   
   
<script src="{{ asset('js/teste.js') }}"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>




@include('layout._footer')
