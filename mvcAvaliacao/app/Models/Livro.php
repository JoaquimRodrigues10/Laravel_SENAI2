<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model{

    protected $fillable = [
        'nome',
        'autor',
        'descricao',
        'editora_id',
        'detalhes_id'
    ];

    public function editora(){
        return $this->belongsTo(Editora::class);
    }

    public function detalhe(){
        return $this->belongsTo(DetalheLivro::class, 'detalhes_id');
    }
}