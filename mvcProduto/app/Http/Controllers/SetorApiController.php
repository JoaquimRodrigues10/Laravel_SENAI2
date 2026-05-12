<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use App\Models\Produto;
use Illuminate\Http\Request;

class SetorApiController extends Controller{
    public function listarApi(){
        $setores = Setor::all();    
        return response()->json($setores);
    }

    public function addApi(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'nCorredor' => 'required|string|max:255'
        ]);

        $setor = Setores::create([
            'nome' => $request->nome,
            'nCorredor' => $request->nCorredor
        ]);

        return response()->json([
            'message' => 'Setor criado!',
            'setor' => $setor
        ], 200);
    }
    public function updateApi(Request $request, $id){

        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|string|max:255',
            'preco' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'tamanho' => 'required|string|max:255',
            'peso' => 'required|numeric|max:255'
        ]);

        $setor = Setores::findOrFail($id);

        // atualiza produto
        $setor->nome = $request->nome;
        $setor->nCorredor = $request->nCorredor;
    
        $setor->save();

        return response()->json([
            'mesage' => "Setor atualizado!",
            'setor' => $setor
        ], 200);
    }
}