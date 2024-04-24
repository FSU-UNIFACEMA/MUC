<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $fillable = [
        'nome',
        'cns',
        'endereco',
        'data_nascimento',
        'rg',
        'cpf',
        'telefone',
        'data_agendamento',
        'data_atendimento',
        'hora_atendimento',
        'profissional',
        'assunto',
    ];
    use HasFactory;
}
