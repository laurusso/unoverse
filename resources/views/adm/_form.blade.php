<!--Form para o adm adicionar atividades no banco de dados-->
<div class="adm">   
    <div class="">
    <label>Nome da Atividade:</label>
    <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}"  required>
    
    </div>

    <div class="">
    <label>Modulo</label>   
    <input type="num"  min="0"  name="modulo" value="{{isset($linha->modulo) ? $linha->modulo : ''}}"  required>
    
    </div>

    <div class="">
    <label>Descricao:</label>    
    <input type="text" name="descricao" value="{{isset($linha->descricao) ? $linha->descricao : ''}}"  required>
    
    </div>

    <div class="">
        <label>Conteudo destinado para?</label>
        <label>
            <input type="radio" name="descricao" value="{{isset($linha->true) ? $linha->descricao : ''}}"  >
            Aluno 
        </label>
        <label>
            <input type="radio" name="descricao" value="{{isset($linha->false) ? $linha->descricao : ''}}"  >
            Professor 
        </label>
    
    </div>

    <div class="">
    <label>Arquivo</label>    
    <input type="file" name="upload"   value="{{isset($linha->upload) ? $linha->upload : ''}}"  required>
    
    </div>

</div>