
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/atividade.css') }}"   media="only screen and (min-width: 769px)" >
<link rel="stylesheet" href="{{ asset('css/app.css') }}"  media="screen and (max-width: 767px) and (orientation: portrait)" > 


<div id="contatv" class="contatv">

<a href="{{route('perfil.atividade')}}"class="btn-voltar" id="btn-voltar"  >Voltar</a>
    @if(session('arq'))
    <h3>{{ session('nome') }}</h3>
    <div class="card-atv-descricao"> 
        <h3>Vamos aprender:</h3>
        <br> 
        <p> {{ session('descricao') }} </p> 
    </div>
 


    <div class="iframe-block" id="">


        <iframe src="{{ asset(session('arq')) }}" width="500px"></iframe> 

    </div>
    @else 
    
        @if($typeUser == 'curioso')
            <img src="{!! asset('img/auxilio/auxilio-curioso.svg') !!}" class="img-auxilio" alt="imagem de auxilio do estudante">
         @elseif($typeUser == 'estudante')
            <img src="{!! asset('img/auxilio/auxilio-estudante.svg') !!}" class="img-auxilio" alt="imagem de auxilio do estudante">
        @elseif($typeUser == 'professor')
            <img src="{!! asset('img/auxilio/auxilio-professor.svg') !!}" class="img-auxilio" alt="imagem de auxilio do estudante">
        @endif
    @endif

    @if(session('conteudo'))
    <button id="MostraCodigo" class="btn-code"><i class="bi bi-code-slash"></i> Codigo da aula</button>
    <button id="EsconderCodigo" class="btn-code"> <i class="bi bi-x"></i> Esconder codigo</button>

    <!-- <i class="bi bi-file-earmark-richtext-fill"></i> -->
    <div id="codebox" class="box size" name="texto">
        <pre>
            <code class="language-c line-numbers" id="texto" data-prismjs-copy="copiar">
                {{ session('conteudo') }}

            </code>
        </pre>


    </div>

    @endif
        
    @if(session('hasExer'))

   
   
         <a href="{{ route('mostra.exercicio',  session('num') )}}" class="btn-code"><i class="bi bi-code-slash"></i> Exercicio da aula</a>
    @endif

   

</div>
  