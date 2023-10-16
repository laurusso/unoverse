<!-- Essa visao tem como funcao a visualizacao das aulas do curso pelo usuario -->

@section('titulo','Atividades') 
@include('layout._menu')  
<link rel="stylesheet" href="{{ asset('css/teste.css') }} " type="text/css">

<!-- <div class="pag-atvs"> -->
<div class="body-atv">
<div class="pag-atvs" >
    
<div class="content">
        <!-- Your page content goes here -->
        <button id="toggleButton" class="sidebar-btn"><i class="bi bi-list"></i></button>
    </div>
    <div class="engloba-atv" id="sidebar">
        <div class="blocado">
            <ul class="menu-atv">
                <li class="titulo-bloc">Aulas</li>
                <div class="eng-atv">

                    @foreach($atvs as $row)
                                    
                                     <!-- Campos do formulário (se necessário) -->

                                <li>
                                <a class="btn-atv" href="{{ route('code.ler',$row->num) }}">{{ $row->num }} - {{$row->nome}} </a>
                                </li>

                           
                    @endforeach

                   

                </div>
                
            </ul>
            
        </div>    

    </div>




    


   

 </div> 
 
>@include('users.boxcode')
</div>
<script src="{{ asset('js/vizu.js') }}"></script>   
<script src="{{ asset('js/prism.js') }}"></script> 
<script src="{{ asset('js/sidebar.js') }}"></script>
     

        

@include('layout._footer') 




