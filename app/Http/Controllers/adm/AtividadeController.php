
<?php

/* Ainda não ta pronto */
/*Rodar controlador com php artisan make:Controller adm/AtividadeControler 
  APAGAR esse arquivo antes de rodar
*/
//namespace App\Http\Controllers\adm; Descomentar esse linha

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;

class AtividadeController extends Controller
{
        
        public function index() {
            // na linha estamos fazendo um select
            // de cursos e dps
            // exportando todos esses dados dentro de linhas 
           // $linhas = Curso::all();
          //  return view ('admin.cursos.index',compact('linhas'));
            return view('adm.index');
        }

        public function lista() {
           
            $linhas = Atividade::all(); 
            return view ('adm.lista',compact('linhas'));
            
        }

        // CHAMA VISAO ADICIONAR
        public function adicionar() {
            return view('adm.adicionar');
        }

        // CHAMA VISAO EDITAR
        public function editar($id) {
            // repare que ele recebe o id da ROTA
            $linha = Atividades::find($id);
        
            // carrega o registro (realiza um select e um fetch internamente)
            return view('admin.atividade.editar',compact('linha'));
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
            $dados = $req->all();
            if($req->hasFile('upload')){

                
                $file = $_FILES["upload"]; 

               // $arq = $req->file('upload');
              //  $ex = $arq->guessClientExtension();

               // $ondeta =  $dir_origem . "/" . $arq;
                $dir = "public/atividades/";
                
                $destino = $dir.$file["name"];

                
                if(move_uploaded_file($destino,$file["tmp_name"]))
                {
                    $dados_arq['upload'] = $destino;
                }

               // copy($ondeta,$destino);

            }

        
        
        Atividade::create($dados);
        $dados_arq['fk_num'] = $dados['num'];
        Arquivo::create($dados_arq);
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
