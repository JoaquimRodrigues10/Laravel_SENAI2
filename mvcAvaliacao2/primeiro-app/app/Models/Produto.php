<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model{

    protected $fillable = [
        'nome',
        'quantidade',
        'preco',
        'detalhes_id'
    ];
    
    public function detalhe(){
        return $this->belongsTo(DetalheProduto::class, 'detalhes_id');
    }
}