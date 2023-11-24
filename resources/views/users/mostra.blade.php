<!-- Essa visao tem como funcao a visualizacao das aulas do curso pelo usuario -->

@section('titulo','Atividades') 
@include('layout._menu')  

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/atividade.css') }}"   media="only screen and (min-width: 769px)" >
<link rel="stylesheet" href="{{ asset('css/app.css') }}"  media="screen and (max-width: 767px) and (orientation: portrait)" > 


<!-- <div class="pag-atvs"> -->
<div class="body-atv"> 
   
 
<div class="pagAtvs" id="pagsAtv">  
       
<div class="content">
        <!-- Your page content goes here -->
        <button id="toggleButton"   onclick="ajustarTamanhoDaDiv()" class="sidebar-btn"><i class="bi bi-justify"></i></button>
       
    </div>  
    <div class="engloba-atv" id="sidebar">
        <div class="blocado">
            <ul class="menu-atv">  
                <li class="titulo-bloc">Aulas</li>
                <div class="eng-atv"> 

                    @foreach($atvs as $row) 
                                    
                                     <!-- Campos do formulário (se necessário) -->

                                <li>
                                <a class="btn-atv" href="{{ route('code.ler',$row->num) }}">{{$row->nome}} </a>
                                </li>
 
                            
                    @endforeach 
             
               
                </div>
                
            </ul>
            
        </div>    

    </div>


    

    


   

 </div> 
 
@include('users.boxcode') 
</div> 
<script src="{{ asset('js/vizu.js') }}"></script>   
<script src="{{ asset('js/prism.js') }}"></script> 
<script src="{{ asset('js/sidebar.js') }}" ></script>

<script src="{{ asset('js/ajustadiv.js') }}"></script>
<script src="{{ asset('js/code.js') }}"></script>

        





