<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('saidas', function (Blueprint $table) {
            // Dados do Livro
            $table->increments('id');
            $table->bigInteger('leitor_id');
            $table->foreignId('livro_id')->constrained(table:'livros' );
            $table->date('data_saida');
            $table->date('data_devolucao');
            $table->foreign('leitor_id')->references('id')->on('leitors');
        });
    }

    public function down()
    {
       Schema::dropIfExists('saidas');
    }
};
