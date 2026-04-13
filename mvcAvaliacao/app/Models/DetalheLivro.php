<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalheLivro extends Model{

    protected $table = 'detalheslivro';

    protected $fillable = [
        'custo',
        'preco_venda',
        'imposto'
    ];

    public function livros(){
        return $this->hasMany(Livro::class);
    }
}