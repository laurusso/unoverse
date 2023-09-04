<!-- Codigo de segurança dps apagar -->
@section('titulo', 'Perfil')
@include('layout._menu') 

   
    <div class="body-perfil">
        
         <h3>Meu perfil</h3>
        <div class="quadro-perfil">
        
                @if($user) <!-- LOOP PRA LER A TABELA -->
                
                <img src="{{ url('/img/' . $img) }}">
                <p>{{ $user->nome }} </p>
                @endif
        </div>
        
    </div>


 @include('layout._footer') 


</body>
</html> 