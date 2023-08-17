<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function createPessoa(Request $req)
    {
        $dados = $req->all();
        Pessoa::create($dados);
    }

    /*
    public function createAluno(Request $req)
    {
        $dados = $req->only([''])
       Pessoa::create()
    }
    public function createProfe(Request $req)
    {
        $dados = $req->only([''])
       Pessoa::create()
    }*/

}
