<div class=" conteudo_form_ativ form_cad_ativ">   
   

   <div class="caixa-cadAtv">
       <div class="geral-atv" >
           <label>Pergunta</label>
           <textarea  class="tamanho-nomeatv"  name="pergunta"   required>{{isset($linha->pergunta) ? $linha->pergunta : ''}}</textarea>
       </div>
       <div class="geral-atv" >
           <label>Alternativa Correta:</label>
           <textarea class="tamanho-nomeatv" name="atv_correta" required>{{ isset($altcorreta) ? $altcorreta : '' }}</textarea>

       </div>
           
       <div class="geral-atv" >
           <label>Alternativa 1:</label>
           <textarea  class="tamanho-nomeatv"  name="atv_1"   required>{{isset($alt1) ? $alt1 : ''}}</textarea>
       </div>
       <div class="geral-atv" >
           <label>Alternativa 2:</label>
           <textarea  class="tamanho-nomeatv"  name="atv_2"  required>{{isset($alt2) ? $alt2 : ''}}</textarea>
       </div>
       <div class="geral-atv" >
           <label>Alternativa 3:</label>
           <textarea  class="tamanho-nomeatv"  name="atv_3" required>{{isset($alt3) ? $alt3 : ''}}</textarea>
       </div>
        @if(isset($atividade))
       <div class="cad-items">
                <label style="color: #FFFFFF;">Atividade:</label>
               
                <select name="fk_atividade" id="escola">
                    <!--Criar um forech com opções do banco-->
                    <option value="" data-default disabled selected></option> 
                    @foreach($atividade as $atv)
                    <option value="{{$atv->num}}">{{$atv->nome}}</option>
                   
                    @endforeach
                </select>
            </div>
            @endif
    </div>


 

</div>  