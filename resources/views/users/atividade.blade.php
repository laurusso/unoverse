<!-- Essa visao tem como funcao a visualizacao das aulas do curso pelo usuario -->

@section('titulo','Atividades') 
@include('layout._menu')  
<link rel="stylesheet" href="{{ asset('css/teste.css') }} " type="text/css">

<div class="pag-atvs">
<div class="content">
        <!-- Your page content goes here -->
        <button id="toggleButton" class="sidebar-btn"><i class="bi bi-three-dots"></i></button>
    </div>
    <div class="engloba-atv" id="sidebar">
        <div class="blocado">
            <ul class="menu-atv">
                <li class="titulo-bloc">Aulas</li>
                <div class="eng-atv">
                    @foreach($atvs as $row)
                        @foreach($arq as $row2)
                            @if($row->num == $row2->fk_num)
                                <li><button onclick="abrirLateral('{{ asset($row2->upload) }}')" class="btn-atv">{{ $row->num }} - {{$row->nome}}</button></li>
                            @endif
                        @endforeach
                    @endforeach
                <!-- </div>
                <div class="eng-atv">  -->
                    
                </div>
                
            </ul>
            
        </div>    

    </div>
                    <span class="iframe-aula" id="lateral-bg">
                        <span id="fechar-modal" onclick="fecharLateral()">X Fechar</span>
                        <iframe id="arquivo" class="iframe-lateral" src=""></iframe>                                
</span>
    
</div>    
<script src="{{ asset('js/vizu.js') }}"></script>   
<script src="{{ asset('js/sidebar.js') }}"></script>
     
@include('layout._footer') 
        

  




