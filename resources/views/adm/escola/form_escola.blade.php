 <!--Form para o adm adicionar atividades no banco de dados-->
<div class=" conteudo_form_ativ form_cad_ativ">   
   

   <div class="caixa-cadAtv">
       <div class="geral-atv" >
           <label>Codigo Escola</label>
           <input  class="tamanho-nomeatv" type="text" name="codigo_escola" value="{{isset($linha->codigo_escola) ? $linha->codigo_escola : ''}}"  required>
       </div>
           


       <div class="geral-atv">
           <label>Nome Escola</label>   
           <input  class="tamanho-nomeatv" type="text"  name="nome_escola" value="{{isset($linha->nome_escola) ? $linha->nome_escola : ''}}"  >
       </div>
       <div class="caixa-cadAtv geral-atv tipo_escola">
            <label>Tipo de ensino:</label>
                <label  >
                    <input type="radio" name="publica" value="true" {{isset($linha->publica) && $linha->publica == true ? 'checked' : '' }}>
                         Publica 
                     </label >
                     <label >
        <input  type="radio" name="publica" value="false" {{isset($linha->publica) && $linha->publica == false ? 'checked' : '' }}>
             Privada
        </label>  
       </div>
                     
<div class="descricao-atv geral-atv">
<label>Estado:</label>
       <select class="select-cd" name="UF">
            <option value="AC" {{isset($linha->UF) && $linha->UF == 'AC' ? 'selected' : '' }}>AC</option>
            <option value="AL" {{isset($linha->UF) && $linha->UF == 'AL' ? 'selected' : '' }}>AL</option>
            <option value="AM" {{isset($linha->UF) && $linha->UF == 'AM' ? 'selected' : '' }}>AM</option>
            <option value="AP" {{isset($linha->UF) && $linha->UF == 'AP' ? 'selected' : '' }}>AP</option>
            <option value="BA" {{isset($linha->UF) && $linha->UF == 'BA' ? 'selected' : '' }}>BA</option>
            <option value="CE" {{isset($linha->UF) && $linha->UF == 'CE' ? 'selected' : '' }}>CE</option>
            <option value="DF" {{isset($linha->UF) && $linha->UF == 'DF' ? 'selected' : '' }}>DF</option>
            <option value="ES" {{isset($linha->UF) && $linha->UF == 'ES' ? 'selected' : '' }}>ES</option> 
            <option value="GO" {{isset($linha->UF) && $linha->UF == 'GO' ? 'selected' : '' }}>GO</option>
            <option value="MA" {{isset($linha->UF) && $linha->UF == 'MA' ? 'selected' : '' }}>MA</option>
            <option value="MG" {{isset($linha->UF) && $linha->UF == 'MG' ? 'selected' : '' }}>MG</option>
            <option value="MS" {{isset($linha->UF) && $linha->UF == 'MS' ? 'selected' : '' }}>MS</option>
            <option value="MT" {{isset($linha->UF) && $linha->UF == 'MT' ? 'selected' : '' }}>MT</option>
            <option value="PA" {{isset($linha->UF) && $linha->UF == 'PA' ? 'selected' : '' }}>PA</option>
            <option value="PB" {{isset($linha->UF) && $linha->UF == 'PB' ? 'selected' : '' }}>PB</option>
            <option value="PE" {{isset($linha->UF) && $linha->UF == 'PE' ? 'selected' : '' }}>PE</option>
            <option value="PI" {{isset($linha->UF) && $linha->UF == 'PI' ? 'selected' : '' }}>PI</option>
            <option value="PR" {{isset($linha->UF) && $linha->UF == 'PR' ? 'selected' : '' }}>PR</option>
            <option value="RJ" {{isset($linha->UF) && $linha->UF == 'RJ' ? 'selected' : '' }}>RJ</option> 
            <option value="RN" {{isset($linha->UF) && $linha->UF == 'RN' ? 'selected' : '' }}>RN</option>
            <option value="RO" {{isset($linha->UF) && $linha->UF == 'RO' ? 'selected' : '' }}>RO</option>
            <option value="RR" {{isset($linha->UF) && $linha->UF == 'RR' ? 'selected' : '' }}>RR</option> 
            <option value="RS" {{isset($linha->UF) && $linha->UF == 'RS' ? 'selected' : '' }}>RS</option>
            <option value="SC" {{isset($linha->UF) && $linha->UF == 'SC' ? 'selected' : '' }}>SC</option>
            <option value="SE" {{isset($linha->UF) && $linha->UF == 'SE' ? 'selected' : '' }}>SE</option>
            <option value="SP" {{isset($linha->UF) && $linha->UF == 'SP' ? 'selected' : '' }}>SP</option>
            <option value="TO" {{isset($linha->UF) && $linha->UF == 'TO' ? 'selected' : '' }}>TO</option>
        
        </select>
        </div>

                
       <div class="descricao-atv geral-atv">
           <label>Cidade:</label>  
           <input  class="tamanho-nomeatv" type="text"  name="cidade" value="{{isset($linha->cidade) ? $linha->cidade : ''}}"  >
        
           </div>
    </div>
 

 

</div> 