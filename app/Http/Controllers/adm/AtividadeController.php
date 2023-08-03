<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividades;

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
    public function editar($id) {
        // repare que ele recebe o id da ROTA
        $linha = Atividades::find($id);

        // carrega o registro (realiza um select e um fetch internamente)
        return view('adm.atividade.editar',compact('linha'));
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
    public function salvar(Request $req)/*codigo incompleto */
    {
        $nome = $req->nome;
        $modulo = $req->modulo;
        $descricao = $req->descricao;
        $aluno = $req->alunos;
       // $dados = $req['nome','modulo','descricao','aluno'];
        $dados = $req->all();
        $img = $req->upload;
        $dados = $nome . $modulo . $descricao . $aluno;

        
        Atividades::create(
            [
                'num' => 'null',
                'nome' => 'as',
                'modulo' => 2,
                'descricao' => 'as',
                'aluno' => true,
            ]
        );
        
        if($req->hasFile('upload')){

            
            //$file = $_FILES['upload']; 
        // $arq = $req->file('upload');
        //  $ex = $arq->guessClientExtension();
        // $ondeta =  $dir_origem . "/" . $arq;
            $dir = "public/atividades/";
            
            $destino = $dir.$img;

            
            if(move_uploaded_file($destino,$img))
            {
                $dados_arq['upload'] = $destino;
            }

        // copy($ondeta,$destino);

        }


    /*

    $dados_arq['fk_num'] = $dados['num'];
    Arquivos::create($dados_arq);*/
    return redirect()->route('adm.lista');
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
