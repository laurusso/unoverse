<!-- Essa visao tem como funcao a visualizacao das aulas do curso pelo usuario -->

@section('titulo','Atividades') 
@include('layout._menu')  
<link rel="stylesheet" href="{{ asset('css/teste.css') }} " type="text/css">

<!-- <div class="pag-atvs"> -->
<div class="espaco">AAAAAAAAAAAAAAAAAAA
        
</div>
    <div class="engloba-atv" id="sidebar">
        <div class="blocado">
            <ul class="menu-atv">
                <li class="titulo-bloc">Aulas</li>
                <div class="eng-atv">
                    @foreach($atvs as $row)
                     
                           
                                     <!-- Campos do formulário (se necessário) -->
                                     
                                    
                                
                                <li>
                                <a class='btn-excluir' href="{{ route('code.ler',$row->num) }}"> {{ $row->num }} - {{$row->nome}} </a>
                                </li>

                           
                    @endforeach

                    @include('users.boxcode')
                <!-- </div>
                <div class="eng-atv">  -->
                    
                </div>
                
            </ul>
            
        </div>    

    </div>




    




<!-- </div>     -->
<script src="{{ asset('js/vizu.js') }}"></script>   
<script src="{{ asset('js/prism.js') }}"></script> 
<script src="{{ asset('js/sidebar.js') }}"></script>
     
@include('layout._footer') 
        

  




