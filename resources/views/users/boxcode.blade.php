

<link rel="stylesheet" href="{{ asset('css/teste.css') }} " type="text/css">
<div class="cont-atv">
        @if(session('arq'))
        <div class="iframe-block" id="">
                
                        
                        <iframe   src="{{ asset(session('arq')) }}" width="500px"></iframe>
        
        </div>
        @endif

        @if(session('conteudo'))

        <div class="box size" name = "texto" >
        <pre>
            <code class="language-c line-numbers" id="texto" data-prismjs-copy="copiar">
                {{ session('conteudo') }}

            </code>
        </pre> 
      
       
    </div>

        @endif
</div>
