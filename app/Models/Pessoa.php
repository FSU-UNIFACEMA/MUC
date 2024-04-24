<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome',
        'nome_social',
        'endereco',
        'numero_casa',
        'bairro',
        'ponto_ref',
        'data_nascimento',
        'estado_civil',
        'cpf',
        'rg',
        'sexo',
        'ocupacao',
        'renda_mes',
        'escolaridade',
        'identidade_genero',
        'nome_mae',
        'nome_pai',
        'religiao',
        'etnia',
        'telefone',
        'email',
        'habitacao',
        'acesso_domicilio',
        'beneficio_social',
        'qual_beneficio',
        'necessidade_especial',
        'qual_necessidade',

    ];


    public function projetos()
    {
        return $this->belongsToMany(Projeto::class, 'pessoa_projeto');
    }

    use HasFactory;
}
