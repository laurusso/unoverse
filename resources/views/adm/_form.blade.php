<!--Form para o adm adicionar atividades no banco de dados-->
<div class=" conteudo_form_ativ form_cad_ativ">   
   

    <div class="caixa-cadAtv">
        <div class="geral-atv" >
            <label>Nome da Atividade:</label>
            <input placeholder="insira o nome da atividade" class="tamanho-nomeatv" type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}"  required>
        </div>
            
        <div class="modulo-infos geral-atv">
            <label>Módulo:</label>   
   
                <label>
                       
                       
                        <input type="radio" name="modulo" value="iniciante" {{ isset($linha->modulo) && $linha->modulo == 'iniciante' ? 'checked' : '' }}>

                    Iniciante 
                    </label>  
                    <label>
                    <input type="radio" name="modulo" value="intermediario" {{isset($linha->modulo) && $linha->modulo == 'intermediario' ? 'checked' : '' }}>
                           
                            Intermediario 
                    </label>
                    <label>
                    <input type="radio" name="modulo" value="avancado" {{isset($linha->modulo) && $linha->modulo == 'avancado' ? 'checked' : '' }}>
                    
                        Avançado 
                    </label>
            
        </div>

        <div class="geral-atv">
            <label>Link aula:</label>   
            <input placeholder="insira o link do youtube" class="tamanho-nomeatv" type="text"  name="link_aula" value="{{isset($linha->link_aula) ? $linha->link_aula : ''}}"  >
        </div>
            
        <div class="descricao-atv geral-atv">
            <label>Descrição:</label>  
            
            <textarea class ="descricao-txt" placeholder="Insira a descrição da aula" id="descricao" name="descricao" rows="4" cols="50" required>{{isset($linha->descricao) ? $linha->descricao : ''}}</textarea>

            <!-- <textarea placeholder="insira a descrição da aula" id="descricao" name="descricao" rows="4" cols="50" value="{{isset($linha->descricao) ? $linha->descricao : ''}}"  required ></textarea>   -->
          
        </div>
    </div>

    <div class="caixa-cadAtv geral-atv">  
      
                <!-- <input type="nu"  min="0"  name="modulo" value="{{isset($linha->modulo) ? $linha->modulo : ''}}"  > -->
                @if(isset($linha->codigo))
        
                <div class="geral-atv">
                
                    <label>
                        Código:
                        <input   type="file" name="codigo" src="{{asset($linha->codigo)}}" accept=".txt"/>
                        <i class="bi bi-upload"></i>
                    </label>
              </div>
                @else
                <div class="geral-atv">
                
                    <label >
                        Código: 
                    <input type="file" name="codigo" accept=".txt"/>
                    <i class="bi bi-upload"></i>
                    </label>
              </div>
                @endif 
            

            @if(isset($linha->upload))
            <div class="geral-atv">
                <label>Atividade
                    <input type="file" name="upload" src="{{asset($linha->upload)}}" accept=".pdf"/> 
                    <i class="bi bi-upload"></i>
                </label>
            </div>
            <!-- <div class=""><input type="file" name="upload" src="{{asset($linha->upload)}}" > -->
            
        @else
        <label>Atividade:
        <input type="file" name="upload" accept=".pdf" required/>
        <i class="bi bi-upload"></i>
</label> 

            @endif 
    </div>
    
    <div class="caixa-cadAtv geral-atv">
                <label>Conteudo destinado para?</label>
                <br>
            
                    <label>
                        <!-- <input type="radio" name="aluno" value="al" {{isset($linha->aluno) && $linha->aluno == 'al' ? 'checked'  : '' }}  > -->
                        <input type="radio" name="aluno" value="true" {{isset($linha->aluno) && $linha->aluno == true ? 'checked' : '' }} required>
                    Aluno 
                    </label>  
                    <label>
                    <input type="radio" name="aluno" value="false" {{isset($linha->aluno) && $linha->aluno == false ? 'checked' : '' }} required>
                        <!-- <input type="radio" name="aluno" value="pr"   {{ isset($linha->aluno) && $linha->aluno == 'pr' ? 'checked' : '' }} > -->    
                        Professor 
                    </label>
                    <label>
                    <input type="radio" name="aluno" value="curioso" {{isset($linha->curioso) && $linha->curioso == 'curioso' ? 'checked' : '' }} required>
                        <!-- <input type="radio" name="aluno" value="pr"   {{ isset($linha->aluno) && $linha->aluno == 'pr' ? 'checked' : '' }} > -->    
                        Curioso 
                    </label>
            

    </div>   

  

</div>