<!--Form para o adm adicionar atividades no banco de dados-->
<div class=" conteudo_form_ativ form_cad_ativ">   
   

    <div class="caixa-cadAtv">
        <div class="" >
            <label>Nome da Atividade:</label>
            <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}"  required>
        </div>
            
        <div class="">
            <label>Módulo</label>   
            <input type="number"  min="0"  name="modulo" value="{{isset($linha->modulo) ? $linha->modulo : ''}}"  required>
        </div>

        <div class="">
            <label>Link aula</label>   
            <input type="text"  name="link_aula" value="{{isset($linha->link_aula) ? $linha->link_aula : ''}}"  >
        </div>
            
        <div class="">
            <label>Descrição:</label>  
            <textarea id="descricao" name="descricao" rows="4" cols="50" value="{{isset($linha->descricao) ? $linha->descricao : ''}}"  required ></textarea>  
            <!-- <input type="text" name="descricao" value="{{isset($linha->descricao) ? $linha->descricao : ''}}"  required> -->
        </div>
    </div>

    <div class="caixa-cadAtv">
      
                <!-- <input type="nu"  min="0"  name="modulo" value="{{isset($linha->modulo) ? $linha->modulo : ''}}"  > -->
                @if(isset($linha->codigo))
        
                <div class="">
                
                    <label >
                        Codigo:
                        <input  type="file" name="codigo" src="{{asset($linha->codigo)}}"/>
                        <img  src="{!! asset('img/adm/icon-upload.png') !!}">
                    </label>
              </div>
                @else
                <div class="">
                
                    <label >
                        Codigo: 
                    <input type="file" name="codigo"/>
                    <img src="{!! asset('img/adm/icon-upload.png') !!} " >
                    </label>
              </div>
                @endif 
            

            @if(isset($linha->upload))
            <div>
                <label>Atividade
                    <input type="file" name="upload" src="{{asset($linha->upload)}}"/>
                    <img src="{!! asset('img/adm/icon-upload.png') !!}">
                </label>
            </div>
            <!-- <div class=""><input type="file" name="upload" src="{{asset($linha->upload)}}" > -->
            >
        @else
        <label>Atividade</label> 
        <input type="file" name="upload"/>
        <img src="{!! asset('img/adm/icon-upload.png') !!}">


            @endif 
    </div>
    
    <div class="caixa-cadAtv">
                <label>Conteudo destinado para?</label>
                <br>
            
                    <label>
                        <!-- <input type="radio" name="aluno" value="al" {{isset($linha->aluno) && $linha->aluno == 'al' ? 'checked'  : '' }}  > -->
                        <input type="radio" name="aluno" value="true" {{isset($linha->aluno) && $linha->aluno == true ? 'checked' : '' }}>
                    Aluno 
                    </label>  
                    <label>
                    <input type="radio" name="aluno" value="false" {{isset($linha->aluno) && $linha->aluno == false ? 'checked' : '' }}>
                        <!-- <input type="radio" name="aluno" value="pr"   {{ isset($linha->aluno) && $linha->aluno == 'pr' ? 'checked' : '' }} > -->    
                        Professor 
                    </label>
                    <label>
                    <input type="radio" name="curioso" value="true" {{isset($linha->curioso) && $linha->curioso == true ? 'checked' : '' }}>
                        <!-- <input type="radio" name="aluno" value="pr"   {{ isset($linha->aluno) && $linha->aluno == 'pr' ? 'checked' : '' }} > -->    
                        Curioso 
                    </label>
            

    </div>   

  

</div>