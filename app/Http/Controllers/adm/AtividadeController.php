<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividades;
use App\Models\Arquivos;
//use Illuminate\Support\Facades\Atividades;

class AtividadeController extends Controller
{

  
       
    public function index(){
        
        //carrega view da home de adm
        return view('adm.index');
    }
 // $linhas = Curso::all();
    //  return view ('admin.cursos.index',compact('linhas'));
    
    public function lista() {
    
        $linhas = Atividades::all(); 
        return view ('adm.lista',compact('linhas'));
        
    }

    // CHAMA VISApublic function index() {
        // na linha estamos fazendo um select
        // de O ADICIONAR
    public function adicionar() {
        return view('adm.adicionar');
    }

    // CHAMA VISAO EDITAR
    public function editar($num) {
        // repare que ele recebe o id da ROTA
      //  $linha = Atividades::find($num);
        $linha = Atividades::where('num', $num);

        // carrega o registro (realiza um select e um fetch internamente)
        return view('adm.editar',compact('linha'));
        // manda o registro encontrado para ser editado na vis�o
    }

    /*
    public function atualizar(Request $req, $id)
    {
    $dados = $req->all();
    if(isset($dados['publicado'])){
    $dados['publicado'] = 'sim';
    }else{
    $dados['publicado'] = 'nao';
    }
    if($req->hasFile('imagem')){
    $imagem = $req->file('imagem');
    $num = rand(1111,9999);
    $dir = "img/cursos/";
    $ex = $imagem->guessClientExtension();
    $nomeImagem = "imagem_".$num.".".$ex;
    $imagem->move($dir,$nomeImagem);
    $dados['imagem'] = $dir."/".$nomeImagem;
    }
    Curso::find($id)->update($dados);
    return redirect()->route('admin.cursos');
    }

    */

   
    public function salvar(Request $req)
    {
        
        $dados_atv = $req->only(['nome','modulo','descricao','aluno']); //recebe por request os dados da tabela ATIVIDADES
        
       if($dados_atv['aluno']=='al')//testa valor enviado pelo radiobutton
       {
            $dados_atv['aluno'] = '1';//selecionou aluno atribuiu valor TRUE
       }
       else{
            $dados_atv['aluno'] = '0';//selecionou professor atribuiu valor FALSE
       } 
        
       Atividades::create($dados_atv); //Cria registro na tabela ATIVIDADES

     
        $num = rand(1111,9999); // escolhe numero pra não repetir
        $dir = "atividades/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
        $ex = $req['upload']->guessClientExtension(); // pega extensão, jpg, png ...
        $nomeArquivo = "aula".$num.".".$ex; // monta novo nome
        $req['upload']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades

        $resul_id = Atividades::select('AUTO_INCREMENT')  //coleta resultado da pesquisa do próximo id a ser inserido
                                    ->from('information_schema.TABLES')
                                    ->where('TABLE_SCHEMA', '=', 'unoverse')
                                    ->where('TABLE_NAME', '=', 'atividades')
                                    ->first();

        $id_foren = ($resul_id->AUTO_INCREMENT) - 1;  //retira -1 do resultado da pesquisa, obtendo o valor do ultimo id inserido
        $upload = $dir . $nomeArquivo; //armazena o nome e diretorio da image para inserir na tabela ARQUIVOS
        $dados_arq = array( 
                "upload" => $upload,
                "fk_num" => $id_foren);
           
            Arquivos::create($dados_arq); //Cria registro na tabela ARQUIVOS

    
            return redirect()->route('adm.lista');//retorna para view lista
    }
    /*
    // CHAMA EXCLUSAO
    public function excluir($id) {
    // repare que ele recebe o id da ROTA
    Curso::find($id)->delete();
    // apos selecionar o registro, � chamado o m�todo DELETE do OBJETO registro
    // � mapeado internamente como um 'delete from' interno que rodara no BD
    return redirect()->route('admin.cursos');
    // abre a vis�o da lista de cursos

    }*/
}
