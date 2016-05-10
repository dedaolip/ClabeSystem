<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('veiculo_id')->unsigned();
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->integer('motorista_id')->unsigned();
            $table->foreign('motorista_id')->references('id')->on('funcionarios');
            $table->string('destino', 80);
            $table->string('origem', 80);
            $table->date('data_partida');
            $table->date('data_chegada');
            $table->integer('tempo');
            $table->string('detalhes');
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
        Schema::drop('viagens');
    }
}
