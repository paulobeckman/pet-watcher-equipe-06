<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->TimeStamp('data_licenciamento');
            $table->TimeStamp('data_vencimento');
            $table->TimeStamp('data_revogacao')->nullable();

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
        Schema::dropIfExists('licencas');
    }
}
