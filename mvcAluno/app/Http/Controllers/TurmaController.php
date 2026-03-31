<?php

namespace App\Http\Controllers;
use app\Models\Turma;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function add(Request $request){

    $request->validate([
        'numSala' => 'required|numeric|max:255',
        'serie' => 'required|string|max:255|unique:turmas,email'
    ]);

    Turma::create([
        'numSala' => $request->numSala,
        'serie' => $request->serie
    ]);

    return redirect()->back()->with('sucess','Turma Cadastrado com sucesso!');

    }
}