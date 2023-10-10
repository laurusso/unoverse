<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="lateral-bg" class="box size" name = "texto" >

<pre>
    <code class="language-c line-numbers" id="texto" data-prismjs-copy="copiar">
    
     @if(session('conteudo'))
            <div class="alert alert-success">
              <pre>  {{ session('conteudo') }} </pre>
            </div>
        @endif
       
    </code>
</pre> 
</div>
</body>
</html>
