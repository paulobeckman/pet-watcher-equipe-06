<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('tipo_aquisicao');
            $table->string('codigo_microchip');
            $table->string('porte');
            $table->string('sexo');
            $table->boolean('ativo');
            $table->string('motivo_inativacao')->nullable();
            $table->TimeStamp('data_nascimento');
            $table->TimeStamp('data_cadastro');

            $table->bigInteger('id_proprietario');
            $table->foreign('id_proprietario')->references('id')->on('proprietarios')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_especie');
            $table->foreign('id_especie')->references('id')->on('especies')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_credenciada_responsavel');
            $table->foreign('id_credenciada_responsavel')->references('id')->on('credenciadas')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('animais');
    }
}
