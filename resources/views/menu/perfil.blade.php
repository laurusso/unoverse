<!-- Codigo de segurança dps apagar -->
@section('titulo', 'Perfil')
@include('layout._menu') 

   
    <div class="body-perfil">
        
         <h3><b>Meu perfil:</b></h3>
         <div class="perfil">
                <div class="quadro-perfil-esquerda">
                
                @if($user) <!-- LOOP PRA LER A TABELA -->
                    <div class="modulo_perfil">
                        <h2>{{ $user->modulo }} </h2>
                        </div>
                        <div class="img_perfil">
                        <img src="{{ asset($img) }}">
                        </div>
                    </div>
                    <div class="quadro-perfil-meio">
                        <h2>Nome:</h2>
                        <p>{{ $user->nome }} </p>
                    </div>
                        
                @endif   
                <a href="#" class="editar-perfil">Editar perfil</i></a>

                    
         </div>
        
                  
    </div>


 @include('layout._footer') 


</body>
</html>     