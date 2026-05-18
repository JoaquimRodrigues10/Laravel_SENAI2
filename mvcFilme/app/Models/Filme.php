<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'titulo',
        'data lançamento',
        'sinopse',
        'gênero',
        'orçamento'

    ];

    public function filme(){
        return $this->hasMany(Filme::class);
    }
}