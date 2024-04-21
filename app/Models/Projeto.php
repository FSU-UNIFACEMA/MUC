<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable=['nome_projeto','descricao_projeto'];

    public function pessoas()
    {
        return $this->belongsToMany(Pessoa::class,'pessoa_projeto');
    }
    use HasFactory;
}
