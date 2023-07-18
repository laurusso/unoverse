<!-- Codigo apenas para modelagem de dado da tabela
    NECESSARIO RODAR O COMANDO php artisan make:model Pessoa -m
    **Antes de rodar o comando apagar este arquivo e o model/Pessoa
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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->string('email',50)->primary();
            $table->string('senha',60);
            $table->string('nome',20);
            $table->string('sobrenome',30);
            $table->string('genero',20);
            $table->string('foto',100);
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
