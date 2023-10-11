

<link rel="stylesheet" href="{{ asset('css/teste.css') }} " type="text/css">

<div class="pag-atvs" id="content">
<pre>
    <code class="language-c line-numbers" id="texto" data-prismjs-copy="copiar">
    
     
            <div class="alert alert-success">
              <pre id="code">  {{ session('conteudo') }} </pre>
            </div>
       
       
    </code>
</pre> 
</div>


<div class="" id="content">
        <span >
                <span >X Fechar</span>
                <iframe id="arquivo" class="iframe-lateral" src="{{ session('arq') }}" width="500px"></iframe>
                              
        </span>
        <iframe id="arquivo" class="iframe-lateral" src="{!! asset(session('arq')) !!}" width="500px"></iframe>         
       
</div>

<script src="{{ asset('js/prism.js') }}"></script> 

<script src="{{ asset('js/vizu.js') }}"></script> 