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
            $table->id('id');
            $table->string('email',50);
            $table->string('senha',100);
            $table->string('foto',100);
            $table->string('nome',50);
            $table->string('sobrenome',50);
            $table->string('genero',20);
            $table->boolean('curioso');
            $table->boolean('adm');
            

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
        Schema::dropIfExists('pessoas');
    }
};
