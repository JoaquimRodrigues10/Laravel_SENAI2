<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model{

    protected $table = 'editoras'; // deixar no plural e em português (tabela vindo como setors)

    protected $fillable = [
        'nome',
        'id',
        'cnpj',
        'país',
        'cidade'
    ];

    public function livros(){
        return $this->hasMany(Livro::class);
    }
}