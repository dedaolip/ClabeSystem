<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id')->unsigned;
            $table->string('nome', 80)->unsigned;
            $table->string('cpf', 15);
            $table->string('fone', 15);
            $table->string('cel', 15);
            $table->string('endereco', 100);
            $table->string('bairro', 80);
            $table->string('cidade', 80);
            $table->string('uf', 2);
            $table->string('cep', 15);
            $table->date('data_nasc');
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
        Schema::drop('pessoas');
    }
}
