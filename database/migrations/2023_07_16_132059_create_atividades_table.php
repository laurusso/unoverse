<!-- Codigo apenas para modelagem de dado da tabela
    NECESSARIO RODAR O COMANDO php artisan make:model Atividade -m
    **Antes de rodar o comando apagar este arquivo e o model/Atividade
-->
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('atividades', function (Blueprint $table) {
                $table->id('num');
                $table->string('nome',60);
                $table->integer('modulo');
                $table->string('descricao',200);
                $table->boolean('aluno');
                $table->timestamps();
            });
           }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividades');
    }
};
