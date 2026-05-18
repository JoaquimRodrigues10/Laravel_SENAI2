<?php
// Estou no arquivo Aluno.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'data_nascimento',
        'telefone',
        'turma_id'
    ];

    public function autor(){
        return $this->belongsTo(Autor::class);
    }
}