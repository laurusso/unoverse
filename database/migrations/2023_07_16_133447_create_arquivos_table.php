<!-- Codigo apenas para modelagem de dado da tabela
    NECESSARIO RODAR O COMANDO php artisan make:model Arquivo -m
    **Antes de rodar o comando apagar este arquivo e o model/Arquivo
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
        Schema::create('arquivos', function (Blueprint $table) {
            $table->id('num_arquivo');
            $table->string('upload',100);
            $table->unsignedBigInteger('fk_num');
            $table->foreign('fk_num')->references('num')->on('atividades');
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
        Schema::dropIfExists('arquivos');
    }
};
