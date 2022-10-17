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
        Schema::create('convidados', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('title')->nullable();
            $table->string('email');
            $table->string('telefone')->nullable();
            $table->string('linkedin')->nullable();
            $table->date('data_palestra');
            $table->time('hora_palestra');
            $table->string('plenario_ou_modulo');
            $table->string('qual_o_painel');
            $table->string('categoria')->nullable();
            $table->string('status')->nullable();
            $table->string('modelo_de_participacao')->nullable();
            $table->string('cupom')->nullable();

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
        Schema::dropIfExists('convidados');
    }
};
