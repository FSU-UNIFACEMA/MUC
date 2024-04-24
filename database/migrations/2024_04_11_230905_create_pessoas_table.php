<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nome_social');
            $table->string('endereco');
            $table->integer('numero_casa');
            $table->string('bairro');
            $table->string('ponto_ref');
            $table->string('data_nascimento');
            $table->string('estado_civil');
            $table->string('cpf');
            $table->string('rg');
            $table->string('sexo');
            $table->string('ocupacao');
            $table->string('renda_mes');
            $table->string('escolaridade');
            $table->string('identidade_genero');
            $table->string('nome_mae');
            $table->string('nome_pai');
            $table->string('religiao');
            $table->string('etnia');
            $table->string('telefone');
            $table->string('email');
            $table->string('habitacao');

            $table->string('beneficio_social');
            $table->string('qual_beneficio');
            $table->string('necessidade_especial');
            $table->string('qual_necessidade');
            $table->string('acesso_domicilio');


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
