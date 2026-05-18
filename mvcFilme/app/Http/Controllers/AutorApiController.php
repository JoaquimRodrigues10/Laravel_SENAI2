<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorApiController extends Controller
{
    // 🔹 Listar todos os autores
    public function index()
    {
        $autores = Autor::all();

        return response()->json($autores, 200);
    }

    // 🔹 Cadastrar autor
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
        ]);

        $autor = Autor::create($request->all());

        return response()->json([
            'message' => 'Autor criado com sucesso!',
            'autor' => $autor
        ], 201);
    }

    // 🔹 Atualizar autor
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
        ]);

        $autor = Autor::findOrFail($id);
        $autor->update($request->all());

        return response()->json([
            'message' => 'Autor atualizado com sucesso!',
            'autor' => $autor
        ], 200);
    }

    // 🔹 Deletar autor
    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();

        return response()->json([
            'message' => 'Autor deletado com sucesso!'
        ], 200);
    }
}