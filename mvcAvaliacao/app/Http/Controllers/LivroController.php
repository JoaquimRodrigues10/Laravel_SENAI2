<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Editora;
use App\Models\DetalheLivro;
use Illuminate\Http\Request;

class LivroController extends Controller{

    public function listar(){
        $livros = Livro::with(['editora','detalhe'])->get();
        return view('listarLivros', compact('livros'));
    }

    public function create(){
        $editoras = Editora::all();
        return view('cadastro', compact('editora'));
    }

    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descricao' => 'required|string|max:255'
        ]);

        $detalhe = DetalheLivro::create([
            'custo' => $request->custo,
            'preco_venda' => $request->preco_venda,
            'imposto' => $request->imposto,
        ]);

        Livro::create([
            'nome' => $request->nome,
            'autor' => $request->quantidade,
            'descricao' => $request->preco,
            'editor_id' => $request->setor_id,
            'detalhes_id' => $detalhe->id
        ]);

        return redirect()->back()->with('success','Livro cadastrado com sucesso!');
    }

    public function atualizar($id){
        $livro = Livro::with('detalhe')->findOrFail($id);
        $editoras = Editora::all();
        return view('atualizar', compact('livro','editoras'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'nome' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descricao' => 'required|string|max:255'
        ]);

        $produto = Livro::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'autor' => $request->autor,
            'descricao' => $request->descricao,
        ]);

        // atualiza detalhe
        $produto->detalhe->update([
            'custo' => $request->descricao,
            'preco_venda' => $request->preco_venda,
            'impostos' => $request->impostos,
        ]);

        return redirect()->back()->with('success','Livro atualizado com sucesso!');
    }

    public function deletar($id){
        $produto = Livro::findOrFail($id);
        $produto->delete();

        return redirect()->route('livro.listar')->with('success','Livro excluído com sucesso!');
    }
}