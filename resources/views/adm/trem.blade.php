
@include('adm.adm_menu') 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@foreach($dados as $row)
    <label> id : <p>{{ $row->num }}</p></label><br>
    <label>  nome: <p>{{ $row->nome }}</p></label><br>
    @if($row->codigo)
    <?php
    // Chame a função do controller e passe o dado atual como parâmetro
        $conteudo = app('App\Http\Controllers\adm\AtividadeController')->ler($row->codigo);
    ?>

    <pre>{{ $conteudo }}</pre>
  
   @endif
    <hr> 
    @endforeach
@include('adm.adm_footer')      

<div class="box size" name = "texto" >
        <pre>
            <code class="language-c line-numbers" id="texto" data-prismjs-copy="copiar">
                void setup(){
                    Serial.println(9600);
                }
                void loop(){
                    println("Hello Jose!");
                }
            </code>
        </pre> 
       
 </div>