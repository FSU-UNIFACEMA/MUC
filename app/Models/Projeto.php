<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable=['nome_projeto','descricao_projeto'];
    use HasFactory;
}
