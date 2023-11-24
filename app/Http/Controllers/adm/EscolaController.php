<?php
namespace App\Http\Controllers\adm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Escola; 
class EscolaController extends Controller
{
      
    public function AdicionarEscola() 
    {
        return view('adm.escola.add_escola'); 
    }

    public function SalvarEscola(Request $req)
    {
        $dados_esc = $req->except(['_token']);
        Escola::create($dados_esc); 
    }

    public function listaEscola() 
    {
        $linha = Escola::all();
        return view('adm.escola.lista',compact('linha')); 
    }

    public function editarEscola($codigo_escola) {
        
        $linha = Escola::where('codigo_escola',$codigo_escola)->first();
      
        return view('adm.escola.editar',compact('linha'));
      
    }   
    public function atualizarEscola(Request $req, $codigo_escola)
    {
        $dados = $req->except(['_token']);
       
        Escola::where('codigo_escola',$codigo_escola)->update($dados);

        return redirect()->route('adm.lista.escola'); 
    }

    public function excluirEscola($codigo_escola)
    {
        
           
        Escola::where('codigo_escola',$codigo_escola)->delete();
       
        return redirect()->route('adm.lista.escola'); 
    }
}