<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;
use App\Models\Arquivo;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Atividades;

class AtividadeController extends Controller
{ 

  
       
    public function index(){   
        //carrega view da home de adm
        return view('adm.index');
    }

    public function lista() {
        $linhas = Atividade::all(); 
        $imgs = Arquivo::all();
        return view ('adm.lista',compact('linhas','imgs'));  
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
        $linha = Atividade::where('num',$num)->first();
        $linha['upload'] = Arquivo::where('fk_num',$num)->first();
        if($linha['aluno'] == 'true')
        {
            $linha['aluno'] = 'al';
        }
        else if($linha['aluno'] == 'false')
        {
            $linha['aluno'] = 'pr';
        }
        else
        {
            $linha['aluno'] = '';
        }
        // carrega o registro (realiza um select e um fetch internamente)
        return view('adm.editar',compact('linha'));
        // manda o registro encontrado para ser editado na vis�o
    }   

   
    public function atualizar(Request $req, $num)
    {
        $atualiza_atv = $req->only(['nome','modulo','descricao','aluno']);
        if($atualiza_atv['aluno']=='al')//testa valor enviado pelo radiobutton
        {   $atualiza_atv['aluno'] = 'true'; } //selecionou aluno atribuiu valor TRUE
       else
        {    $atualiza_atv['aluno'] = 'false';} //selecionou professor atribuiu valor FALSE
        
        if($req->hasFile('upload')){
            $num = rand(1111,9999); // escolhe numero pra não repetir
            $dir = "atividades/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
            $ex = $req['upload']->guessClientExtension(); // pega extensão, jpg, png ...
            $nomeArquivo = "aula".$num.".".$ex; // monta novo nome
            $req['upload']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
    
        }
       
        Atividade::where('num',$num)->update($atualiza_atv);
        return redirect()->route('adm.lista');
    }

    

   
    public function salvar(Request $req)
    {
        
        //$dados_atv = $req->only(["nome",'modulo',"descricao",'aluno']); //recebe por request os dados da tabela ATIVIDADES
        $dados_atv = $req->except(['upload']);

       if($dados_atv['aluno']=='al')//testa valor enviado pelo radiobutton
       {
            $dados_atv['aluno'] = 'true';//selecionou aluno atribuiu valor TRUE
       }
       else{
            $dados_atv['aluno'] = 'false';//selecionou professor atribuiu valor FALSE
       } 
      
        //Cria registro na tabela ATIVIDADES
        Atividade::create($dados_atv);
      
    
        $num = rand(1111,9999); // escolhe numero pra não repetir
        $dir = "atividades/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
        $ex = $req['upload']->guessClientExtension(); // pega extensão, jpg, png ...
        $nomeArquivo = "aula".$num.".".$ex; // monta novo nome
        $req['upload']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades

        $ultimoId = Atividade::orderBy('num', 'desc') ->value('num'); //seleciona o ultimo id inserio em Atividades
        $upload = $dir . $nomeArquivo; //armazena o nome e diretorio da image para inserir na tabela ARQUIVOS
        $dados_arq = array( 
                "upload" => $upload,
                "fk_num" => $ultimoId);
           
        Arquivo::create($dados_arq); //Cria registro na tabela ARQUIVOS

    
        return redirect()->route('adm.lista');//retorna para view lista
    }
   
    // CHAMA EXCLUSAO
    public function excluir($num) {
        Arquivo::where('fk_num',$num)->delete();//Necessario excluir o registro que possui foreign key o id de Atividades
        Atividade::where('num',$num)->delete();//exclusao do registro de Atividades
        return redirect()->route('adm.lista');

    }
}
