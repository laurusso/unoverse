<!-- Essa visao tem como funcao a visualizacao das aulas do curso pelo usuario -->

@section('titulo','Exercicios') 
@include('layout._menu')  

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/atividade.css') }}"   media="only screen and (min-width: 769px)" >
<link rel="stylesheet" href="{{ asset('css/app.css') }}"  media="screen and (max-width: 767px) and (orientation: portrait)" > 

<div class="espaco"></div>
<?php $num = 1;?>
@foreach($exercicios as $ex)

<div class="box-exercicio">
    <h3>{{ $ex->pergunta }}</h3>

    <?php
        // Crie um array com as alternativas
        $alternativasArray = []; 
        foreach ($alternativas as $alt) {
            if ($alt->id_alt == $ex->fk_alt_correta) {
                $correta=$alt->text_alt;
                $alternativasArray[] = ['id' => $ex->fk_alt_correta, 'text' => $alt->text_alt];
            } elseif ($alt->id_alt == $ex->alt_1) {
                $alternativasArray[] = ['id' => $ex->alt_1, 'text' => $alt->text_alt];
            } elseif ($alt->id_alt == $ex->alt_2) {
                $alternativasArray[] = ['id' => $ex->alt_2, 'text' => $alt->text_alt];
            } elseif ($alt->id_alt == $ex->alt_3) {
                $alternativasArray[] = ['id' => $ex->alt_3, 'text' => $alt->text_alt];
            }
        }

        // Embaralhe o array de alternativas
        shuffle($alternativasArray); 
        $cont=0;
    ?>
    
   
    @foreach($alternativasArray as $alt)
    <p class="alternativas">
    @if($cont==0) <span class="letra"> A </span>  <?php $cont++; ?> 
    @elseif($cont==1) <span class="letra"> B </span>  <?php $cont++; ?>
    @elseif($cont==2) <span class="letra"> C </span>  <?php $cont++; ?> 
    @elseif($cont==3) <span class="letra"> D </span>  <?php $cont++; ?>
    @endif
        <span class="text_alt">{{ $alt['text'] }}</span>
        <!-- <input  type="radio" name="resposta" value="{{ $alt['text'] }}"> {{ $alt['text'] }} -->
    </p>    
    @endforeach 
    <p class="alt_correta" id="resposta_certa_{{ $num }}" style="display:none"> Alternativa correta: {{$correta}}</p>
</div>
<?php $num++; ?> 
@endforeach 

<div class="group-btn">

<a href="#"  class="btn-exer" id="btn-mostra" onclick="Resposta('mostra','{{$num}}')" >Mostrar Respostas</a> 
<a href="#"   class="btn-exer" id="btn-oculta" onclick="Resposta('ocultar','{{$num}}')" >Ocultar Respostas</a>
<a href="#" class="btn-exer" id="botaoVoltar" onclick=" voltarTela()" >Voltar</a>
</div>
<script src="{{ asset('js/exercicio.js') }}"></script>
   