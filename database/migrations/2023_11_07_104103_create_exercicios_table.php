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
        Schema::create('exercicios', function (Blueprint $table) {
            $table->bigInteger('id_exercicio')->primary();
            $table->unsignedBigInteger('fk_atividade'); 
            $table->foreign('fk_atividade')->references('num')->on('atividades');
            $table->unsignedBigInteger('fk_alt_correta');   
            $table->foreign('fk_alt_correta')->references('id_alt')->on('alternativas');
            $table->string('pergunta',500);
            $table->string('imagemAtv',30);
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
        Schema::dropIfExists('exercicios');
    }
};
