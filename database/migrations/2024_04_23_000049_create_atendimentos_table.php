<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cns');
            $table->string('endereco');
            $table->date('data_nascimento');
            $table->string('rg');
            $table->string('cpf');
            $table->string('telefone');
            $table->date('data_agendamento');
            $table->date('data_atendimento');
            $table->string('hora_atendimento');
            $table->string('profissional');
            $table->text('assunto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
