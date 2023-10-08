<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;
use App\Models\Arquivo;
use App\Models\User;
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


    public function lista_usuarios() {
        $infos = User::all(); 
        return view ('adm.lista_usuarios',compact('infos'));         
    }

    public function trem() {
        $dados = Atividade::all(); 
        
        return view ('adm.trem',compact('dados'));  
    }  

     
    public function ler($code)
    {
        //$num = 21;
        // Caminho para o arquivo de texto
       // $caminhoArquivo = $req;
        $caminhoArquivo =  $code;
        // Verifique se o arquivo existe
        if (file_exists($caminhoArquivo)) {
            // Leia o conteúdo do arquivo
            $conteudo = file_get_contents($caminhoArquivo);

            // Retorne a vista com o conteúdo 
          //  return redirect()->back()->with('conteudo', $conteudo);
            // return view('adm.trem')->with('conteudo', $conteudo);
             return $conteudo;
        } else { 
            // Arquivo não encontrado 
            $conteudo = "sem code"; 
           // return redirect()->back()->with('conteudo', $conteudo);
            // return view('adm.trem')->with('conteudo', $conteudo);
             return $conteudo;
        }
    }
    public function adicionar() {
        return view('adm.adicionar'); 
    }
  
    // CHAMA VISAO EDITAR
    public function editar($num) {
        
        $linha = Atividade::where('num',$num)->first();
        $linha['upload'] = Arquivo::where('fk_num',$num)->first();
        // if($linha['aluno'] == 'true')
        // {
        //     $linha['aluno'] = 'al';
        // }
        // else if($linha['aluno'] == 'false')
        // {
        //     $linha['aluno'] = 'pr';
        // }
       
        // carrega o registro (realiza um select e um fetch internamente)
        return view('adm.editar',compact('linha'));
        // manda o registro encontrado para ser editado na vis�o
    }   

   
    public function atualizar(Request $req, $num)
    {
        $atualiza_atv = $req->only(['nome','modulo','descricao','aluno']);
        if($dados_atv['aluno'] == "curioso")
        {
            $dados_atv['curioso'] = true;
            $dados_atv['aluno'] = false;
        } 
        else
        {
            $dados_atv['curioso'] = false;
        }
        if($req->hasFile('upload')){
            $n = rand(1111,9999); // escolhe numero pra não repetir
            $dir = "atividades/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
            $ex = $req['upload']->guessClientExtension(); // pega extensão, jpg, png ...
            $nomeArquivo = "aula".$n.".".$ex; // monta novo nome
            $req['upload']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
            $upload = $dir . $nomeArquivo; 
            $atualiza_arq = array( 
                "upload" => $upload,
                "fk_num" => $num);
        $arq_excluir = Arquivo::where('fk_num', $num)->value('upload');
       
       
        if (file_exists($arq_excluir)) {
            // Tenta excluir o arquivo
            unlink($arq_excluir);
        } 

        Arquivo::where('fk_num',$num)->update($atualiza_arq);

        }
        if($req->hasFile('codigo')){
            
            //$num = rand(1111,9999); // escolhe numero pra não repetir
            $n = rand(1111,9999); // escolhe numero pra não repetir
            $dir = "atividades/code/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
            $ex = $req['codigo']->guessClientExtension(); // pega extensão, jpg, png ...
            // $nomeArquivo = $req->file('codigo')->getClientOriginalName();
            $nomeArquivo = "code".$n.".".$ex; // monta novo nome
           // $nomeArquivo = "aula".$num.".".$ex; // monta novo nome
            $req['codigo']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
    
            $codigo = $dir . $nomeArquivo; //armazena o nome e diretorio da image para inserir na tabela ARQUIVOS
            
            $atualiza_atv['codigo'] = $codigo;
            // dd($dados_atv['codigo']);
        }  
        
       
        Atividade::where('num',$num)->update($atualiza_atv);
      
        return redirect()->route('adm.lista'); 
    }

    

   
    public function salvar(Request $req)
    {
        
        //$dados_atv = $req->only(["nome",'modulo',"descricao",'aluno']); //recebe por request os dados da tabela ATIVIDADES
        $dados_atv = $req->except(['upload']);

      
       
        if($dados_atv['aluno'] == "curioso")
        {
            $dados_atv['curioso'] = true;
            $dados_atv['aluno'] = false;
        } 
        else
        {
            $dados_atv['curioso'] = false;
        }

        if($req->hasFile('codigo')){
            
            //$num = rand(1111,9999); // escolhe numero pra não repetir
            $n = rand(1111,9999); // escolhe numero pra não repetir
            $dir = "atividades/code/"; // pasta onde armazena arquivos, localizada no projeto em: /public/atividades
            $ex = $req['codigo']->guessClientExtension(); // pega extensão, jpg, png ...
            // $nomeArquivo = $req->file('codigo')->getClientOriginalName();
            $nomeArquivo = "code".$n.".".$ex; // monta novo nome
           // $nomeArquivo = "aula".$num.".".$ex; // monta novo nome
            $req['codigo']->move($dir,$nomeArquivo);//move o arquivo para  /public/atividades
    
            $codigo = $dir . $nomeArquivo; //armazena o nome e diretorio da image para inserir na tabela ARQUIVOS
            
            $dados_atv['codigo'] = $codigo;
            // dd($dados_atv['codigo']);
        }  

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
        $arq_excluir = Arquivo::where('fk_num', $num)->value('upload');
           
      
        Arquivo::where('fk_num',$num)->delete();//Necessario excluir o registro que possui foreign key o id de Atividades
        Atividade::where('num',$num)->delete();//exclusao do registro de Atividades
       
        if (file_exists($arq_excluir)) {
            // Tenta excluir o arquivo
            unlink($arq_excluir);
        } 
        return redirect()->route('adm.lista');

    }
}
