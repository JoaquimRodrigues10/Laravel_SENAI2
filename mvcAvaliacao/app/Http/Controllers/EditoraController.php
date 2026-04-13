<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller{

    public function listarEditora(){
        $editora = Editora::all(); // usando o all() pq quero apenas listar
        return view('listareditora', compact('editora'));
    }

    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'id' => 'required|string|max:255',
            'cnpj' => 'required|string|max:255',
            'país' => 'required|string|max:255',
            'cidade' => 'required|string|max:255'
        ]);

        Setor::create([
            'nome' => $request->nome,
            'id' => $request->id,
            'cnpj' => $request->cnpj,
            'país' => $request->país,
            'cidade' => $request->cidade
        ]);

        return redirect()->back()->with('success','editora cadastrado com sucesso!');
    }
}