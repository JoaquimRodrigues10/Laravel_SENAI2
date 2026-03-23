<?php 

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar(){
        $query = Produto::query();
        $produtos = $query->get();
        return view('listar', compact('produtos'));
    }
}