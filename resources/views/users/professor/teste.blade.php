<!-- Codigo de segurança dps apagar -->
@section('titulo', 'Módulos')
@include('layout._menu') 

   
<div>
            @foreach($modulos as $modulo) <!-- LOOP PRA LER A TABELA -->
                 <tr> {{$modulo->nome}} </tr>
                              

</div>


 @include('layout._footer') 


</body>
</html> 