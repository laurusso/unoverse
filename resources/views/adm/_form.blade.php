<!--Form para o adm adicionar atividades no banco de dados-->
<div class="adm conteudo_form_ativ">   
    <div class="form_cad_ativ">
        <div class="Nome_da_Atividade" >
            <label>Nome da Atividade:</label>
            <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}"  required>
        </div>
    
  

    <div class="form_cad_ativ">
        <label>Módulo</label>   
        <input type="num"  min="0"  name="modulo" value="{{isset($linha->modulo) ? $linha->modulo : ''}}"  required>
        
    </div>

    <div class="form_cad_ativ">
        <label>Descrição:</label>    
        <input type="text" name="descricao" value="{{isset($linha->descricao) ? $linha->descricao : ''}}"  required>
    </div>
    
    <div class="form_cad_ativ">
        <label>Conteudo destinado para?</label>
        <label>
            <input type="radio" name="aluno" value="al" {{isset($linha->aluno) && $linha->aluno == 'al' ? 'checked'  : '' }}  >
            Aluno 
        </label>
        <label>
            <input type="radio" name="aluno" value="pr"   {{ isset($linha->aluno) && $linha->aluno == 'pr' ? 'checked' : '' }} >
            Professor 
        </label>
    
    </div>
    </div>

     <!-- <div class="">
    <label>Arquivo</label>    
    <input type="file" name="upload"   value="{{isset($linha->upload) ? $linha->upload : ''}}"  required>
    
    </div> -->

    <input type="file" name="upload"/>
   
     @if(isset($linha->upload))
    <div>
        <input type="file" name="upload" src="{{asset($linha->upload)}}"/>
    </div>
      <!-- <div class=""><input type="file" name="upload" src="{{asset($linha->upload)}}" > -->
  </div>
     @endif 




    

  

</div>