<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_pessoa');
            $table->string('cpf_cnpj');
            $table->string('nome_completo');
            $table->string('telefone');
            $table->string('email');
            $table->string('endereco');

            $table->bigInteger('id_credenciada');
            $table->foreign('id_credenciada')->references('id')->on('credenciadas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('proprietarios');
    }
}
