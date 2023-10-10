<!-- Essa visao tem como funcao a visualizacao das aulas do curso pelo usuario -->

@section('titulo','Atividades') 
@include('layout._menu')  
<link rel="stylesheet" href="{{ asset('css/teste.css') }} " type="text/css">

<!-- <div class="pag-atvs"> -->
    <div class="engloba-atv" id="sidebar">
        <div class="blocado">
            <ul class="menu-atv">
                <li class="titulo-bloc">Aulas</li>
                <div class="eng-atv">
                    @foreach($atvs as $row)
                        @foreach($arq as $row2)
                            @if($row->num == $row2->fk_num)
                            <form  method="post" action="{{route('code.ler')}}" target="iframeResultado">
                            {{ csrf_field() }}
                                     <!-- Campos do formulário (se necessário) -->
                                     <input type="text" name="code" value="{{isset($row->codigo) ? $row->codigo : ''}}">
                                     <button type="submit" id="botaoExterno" onclick="abrirLateral('{{ asset($row2->upload) }}')" class="btn-atv">{{ $row->num }} - {{$row->nome}} </button>

                                    
                                </form>
                                <li>
                                    <!-- <button  onclick="abrirLateral('{{ asset($row2->upload) }}')" class="btn-atv">{{ $row->num }} - {{$row->nome}} </button> -->
                                    

                                </li>
                                
                            @endif
                        @endforeach
                    @endforeach
                <!-- </div>
                <div class="eng-atv">  -->
                    
                </div>
                
            </ul>
            
        </div>    

    </div>

<div class="pag-atvs" id="content">
        <span class="iframe-aula" id="lateral-bg">
                <span id="fechar-modal" onclick="fecharLateral()">X Fechar</span>
                <iframe id="arquivo" class="iframe-lateral" src=""></iframe>                                
        </span>
        <button id="toggleButton" class="sidebar-btn"><i id="list" class="bi bi-list"></i></button>
</div>

<iframe src="{{ asset('users.boxcode') }}" name="iframeResultado" id="iframeResultado" style="border:none;">

</iframe>

    




<!-- </div>     -->
<script src="{{ asset('js/vizu.js') }}"></script>   
<script src="{{ asset('js/prism.js') }}"></script> 
<script src="{{ asset('js/sidebar.js') }}"></script>
     
@include('layout._footer') 
        

  




