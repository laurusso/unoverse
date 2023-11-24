<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Atividade;
use App\Models\Alternativa;
use App\Models\Exercicio;

class ExercicioController extends Controller
{
    //
    public function mostraDestino()
    {
        return view('adm/exercicios/ExerDestino');
    }
    public function DestinoExercicio(Request $req)
    {
        $tipo = $req['destinoEx'];
       if($tipo == 'aluno')
       {
            $atividade = Atividade::where('aluno',true)->get();
            return view('adm/exercicios/adicionaExercicio',compact('tipo','atividade'));
           
       }  
       else if($tipo == 'professor')
       {
             $atividade = Atividade::where('aluno', false)
                      ->where('curioso', false)
                      ->get();
                      return view('adm/exercicios/adicionaExercicio',compact('tipo','atividade'));
       }
       else if($tipo == 'curioso')
       {
        $atividade = Atividade::where('curioso',true)->get();
        return view('adm/exercicios/adicionaExercicio',compact('tipo','atividade'));
       }
    }

    public function salvaExercicio(Request $req)
    {
        $correta = ['text_alt' => $req['atv_correta']  ];
      
        $atv_1 = ['text_alt' => $req['atv_1']  ];
        $atv_2 = ['text_alt' => $req['atv_2']  ];
        $atv_3 = ['text_alt' => $req['atv_3']  ];
        Alternativa::create($correta);
        $fk_correta = Alternativa::orderBy('id_alt', 'desc') ->value('id_alt'); 

        Alternativa::create($atv_1);
        $fk_atv1 = Alternativa::orderBy('id_alt', 'desc') ->value('id_alt'); 

        Alternativa::create($atv_2);
        $fk_atv2 = Alternativa::orderBy('id_alt', 'desc') ->value('id_alt'); 

        Alternativa::create($atv_3);
        $fk_atv3 = Alternativa::orderBy('id_alt', 'desc') ->value('id_alt'); 
        
        $exercicio = array(
            'fk_atividade' => $req['fk_atividade'],
            'fk_alt_correta' => $fk_correta,
            'pergunta' => $req['pergunta'],
            'imagematv' => $req['imagematv'],
            'alt_1' => $fk_atv1,
            'alt_2' => $fk_atv2,
            'alt_3' => $fk_atv3

        );

        Exercicio::create($exercicio);

        return view('adm.index');
    }


    public function listaExercicio($num)
    {
        $lista = Exercicio::where('fk_atividade', $num)
                      ->get();
        $atv = Atividade::where('num', $num)->value('nome');
                     
                      return view('adm/exercicios/listaExercicio',compact('lista','atv'));
        
    }
    public function editarExercicio($id_exercicio)
    {
        $linha = Exercicio::where('id_exercicio',$id_exercicio)->first();
        $altcorreta= Alternativa::where('id_alt',$linha->fk_alt_correta)->value('text_alt');
        $alt1 = Alternativa::where('id_alt',$linha->alt_1)->value('text_alt');
        $alt2 = Alternativa::where('id_alt',$linha->alt_2)->value('text_alt');
        $alt3 = Alternativa::where('id_alt',$linha->alt_3)->value('text_alt');
       
        return view('adm/exercicios/editarExercicio',compact('linha','altcorreta','alt1','alt2','alt3'));
    }
    public function atualizarExercicio(Request $req, $id_exercicio)
    {
       
        $pergunta = ['pergunta' => $req['pergunta']  ];
        $correta = ['text_alt' => $req['atv_correta']  ];
        $alt1 = ['text_alt' => $req['atv_1']  ];
        $alt2 = ['text_alt' => $req['atv_2']  ];
        $alt3 = ['text_alt' => $req['atv_3']  ];

        Exercicio::where('id_exercicio',$id_exercicio)->update($pergunta);

        $fkcorreta = Exercicio::where('id_exercicio',$id_exercicio)->value('fk_alt_correta');
        Alternativa::where('id_alt',$fkcorreta)->update($correta);

        $atv1 = Exercicio::where('id_exercicio',$id_exercicio)->value('alt_1');
        Alternativa::where('id_alt',$atv1)->update($alt1);

        $atv2 = Exercicio::where('id_exercicio',$id_exercicio)->value('alt_2');
        Alternativa::where('id_alt',$atv2)->update($alt2);

        $atv3 = Exercicio::where('id_exercicio',$id_exercicio)->value('alt_3');
        Alternativa::where('id_alt',$atv3)->update($alt3);
      
        return redirect()->route('adm.lista'); 
    }


    public function excluirExercicio($id_exercicio)
    {
        $fkcorreta = Exercicio::where('id_exercicio',$id_exercicio)->value('fk_alt_correta');
        $atv1 = Exercicio::where('id_exercicio',$id_exercicio)->value('alt_1');
        $atv2 = Exercicio::where('id_exercicio',$id_exercicio)->value('alt_2');
        $atv3 = Exercicio::where('id_exercicio',$id_exercicio)->value('alt_3');
           
        Exercicio::where('id_exercicio',$id_exercicio)->delete();
        Alternativa::where('id_alt',$fkcorreta)->delete();
        Alternativa::where('id_alt',$atv1)->delete();
        Alternativa::where('id_alt',$atv2)->delete();
        Alternativa::where('id_alt',$atv3)->delete();
           
        
        return redirect()->route('adm.lista'); 
    }

}
   