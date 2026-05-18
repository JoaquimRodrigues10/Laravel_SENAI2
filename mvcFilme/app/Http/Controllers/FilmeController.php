<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmeController extends Controller
{
    public function listar(){
        $filmes = Filme::get();
        return view('listar', compact('filmes'));
    }
}