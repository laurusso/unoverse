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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id('id_pessoa');
            $table->string('email',50);
            $table->string('senha',100);
            $table->string('foto',80);
            $table->string('home',50);
            $table->string('sobrenome',50);
            $table->string('genero',20);
            

            $table->timestamps();
        });
    }
/*  Email:varchar(50) PRIMARY KEY,
    Senha:varchar(60),
    Foto:varchar(100),
    Nome:varchar(20),
    Sobrenome:varchar(30),
    Genero:varchar(20),
    Curioso:booleano,
    Administrador:booleano */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
};
