<!-- Codigo de segurança dps apagar -->
@section('titulo', 'Perfil')
@include('adm.adm_menu')  

<div class="body-perfil">

<form id="form" method="post" action="{{ route('edit.perfil') }}" enctype="multipart/form-data">

{{ csrf_field() }}
    <h3><b>Meu perfil:</b></h3>
    <div class="perfil">
        
        <div class="quadro-perfil-esquerda">

            <!-- LOOP PRA LER A TABELA -->
 
            @if($user) 

            <input type="hidden" name="id" value="{{auth::user()->id}}">
            <input type="hidden" id="campoAlterado" name="campo" value="">
            <div class="modulo_perfil">
                <h2><b>Módulo: {{ $userModo}} </b></h2>
            </div>  
            
            <div class="img_perfil">  
            <a onclick="exibicaobutton('mostra')"><img src="{{ asset($img) }}"></a>
               <div class="overlay">
            <a href="#" onclick="exibicaobutton('mostra')" >Clique para alterar</a>
            </div> 
            <!-- <a onclick="exibicaobutton('mostra')"><img src="{{ asset($img) }}"></a> -->
           
            </div>   <div class="botoes-perfil"> 
            <a class="btnFoto-perfil" id="esconderBTN"  onclick="exibicaobutton('esconde')">cancelar</a>
                <button class="btnFoto-perfil"  id="Fotodefault">Deixar default</button>
                <label  id="InputFoto"  class="btnFoto-perfil">Escolher imagem
                    <input  class="btnFoto-perfil" type="file"  name="foto" accept=".png, .jpg, .jpeg">
                <label>
               
            </div>
        </div>    
       
        <div class="quadro-perfil-meio ">
            <h2>Nome:</h2> 
            <div class="input-group">
            <input class="input-editavel" type="text" id="editableInputNome" name="nome" value="{{$user->nome}}" readonly>

                <i id="editIconNome" class="icon-edit bi bi-pencil-square" onclick="toggleEditMode('editableInputNome', 'editIconNome', 'checkIconNome', 'nome')"></i>
                <i id="checkIconNome" class="icon-check bi bi-check" onclick="toggleEditMode('editableInputNome', 'editIconNome', 'checkIconNome','nome')"></i>

            </div>  
            <h2>Sobrenome:</h2>
            <div class="input-group"> 
                <input class="input-editavel" type="text" id="editableInputSobrenome" name="sobrenome" value="{{$user->sobrenome}}" readonly>
                
                <i id="editIconSobrenome" class="icon-edit bi bi-pencil-square" onclick="toggleEditMode('editableInputSobrenome', 'editIconSobrenome', 'checkIconSobrenome','sobrenome')"></i>
                <i id="checkIconSobrenome" class="icon-check bi bi-check"  onclick="toggleEditMode('editableInputSobrenome', 'editIconSobrenome', 'checkIconSobrenome','sobrenome')"></i>

            </div>
        </div>   
        <!-- aqui será a linha branca --> 
        <img src="{!! asset('img/line.svg') !!}" class="linha"> 
        <div class="quadro-perfil-direita"> 
            <h2>Email:</h2>
            <div class="input-group">
                <input class="input-editavel" type="text" id="editableInputEmail" value="{{$user->email}}" name="email" readonly>
                <i id="editIconEmail" class="icon-edit bi bi-pencil-square" onclick="toggleEditMode('editableInputEmail', 'editIconEmail', 'checkIconEmail', 'email')"></i>
                <i id="checkIconEmail" class="icon-check bi bi-check" onclick="toggleEditMode('editableInputEmail', 'editIconEmail', 'checkIconEmail','email')"></i>

            </div>

            <!-- campo com js para não mostrar a senha sem apertar o botão -->
            <h2>Senha:</h2>
            <div class="input-group">
            <a class="btn-senha-perfil" onclick="senha('mostra')" id="mostra">mudar senha</a>
            <label id="label1" >Senha atual:   </label>
                <input class="input-editavel" id="senhaAntiga"  type="password" id="editableInputSenha" name="Senhavelha" >
         
            <label id="label2" >Senha nova:</label>
                <input class="input-editavel" id="senhaNova"   type="password" id="editableInputSenha" name="Senhanova" >
            
            <a class="btn-senha-perfil" onclick="senha('ocultar')" id="ocultar"  >cancelar</a>
            <button class="btn-senha-perfil" id="mudarSenha">Alterar</button>
            @error('Senhanova')
            <span class="text-error">{{ $message }}</span>
            @enderror
            @error('Senhavelha')
            <span class="text-error">{{ $message }}</span>
            @enderror
        </div>
           
  
            <!-- <a href="#">Alterar senha</a> -->
        </div>

 
        @endif
        </form>

 

    </div>
    <script src="{{ asset('js/edit.js') }}"></script>

    @include('layout._footer')


    </body>

    </html>