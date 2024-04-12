<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sociofamiliar extends Model
{
    protected $fillable=['beneficio_social',
        'qual_beneficio',
        'necessidade_especial',
        'qual_necessidade'];
    public function Pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
    use HasFactory;
}
