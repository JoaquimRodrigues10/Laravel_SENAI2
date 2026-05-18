<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeApiController extends Controller
{
    // 🔹 Listar todos os filmes
    public function index()
    {
        $filmes = Filme::all();

        return response()->json($filmes, 200);
    }

    // 🔹 Cadastrar filme
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'data_lancamento' => 'required|date',
            'sinopse' => 'required|string',
            'genero' => 'required|string|max:100',
            'orcamento' => 'required|numeric'
        ]);

        $filme = Filme::create($request->all());

        return response()->json([
            'message' => 'Filme criado com sucesso!',
            'filme' => $filme
        ], 201);
    }

    // 🔹 Atualizar filme
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'data_lancamento' => 'required|date',
            'sinopse' => 'required|string',
            'genero' => 'required|string|max:100',
            'orcamento' => 'required|numeric'
        ]);

        $filme = Filme::findOrFail($id);
        $filme->update($request->all());

        return response()->json([
            'message' => 'Filme atualizado com sucesso!',
            'filme' => $filme
        ], 200);
    }

    // 🔹 Deletar filme
    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return response()->json([
            'message' => 'Filme deletado com sucesso!'
        ], 200);
    }
}