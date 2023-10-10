<!-- Codigo de segurança dps apagar -->
@section('titulo', 'Perfil')
@include('layout._menu') 

<div class="body-perfil">
        
        <h3><b>Meu perfil:</b></h3>
        <div class="perfil">
                   <div class="quadro-perfil-esquerda">
               
             <!-- LOOP PRA LER A TABELA -->
           
             @if($user)
                   <div class="modulo_perfil">
                       <h2><b>Estudante </b></h2>
                   </div>
                   <div class="img_perfil">
                        <img src="{{ asset($img) }}">
                       </div>
                   </div>
                   <div class="quadro-perfil-meio">
                       <h2>Nome:</h2>
                       <p>{{ $user->nome }}</p>

                       <h2>Sobrenome:</h2>
                       <p>{{ $user->sobrenome }} </p>

                       <h2>Escola:</h2>
                       <p>Cristino Cabral </p>
                   </div>
                   <!-- aqui será a linha branca -->
                   <img src="Line 7.svg" alt="" class="linha">
                   <div class="quadro-perfil-direita">
                       <h2>E-mail:</h2>
                       <p>{{ $user->email }}</p>

                       <!-- campo com js para não mostrar a senha sem apertar o botão -->
                       <h2>Senha:</h2>
                       <p>{{ $user->senha }}</p>

                      <!-- <a href="#">Alterar senha</a> -->


                   </div>
            
               <a href="#" class="editar-perfil">Editar perfil</i></a>

                  @endif
            </form>
        </div>
       
                 
   </div>


 @include('layout._footer') 


</body>
</html>     