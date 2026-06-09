<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function listarApi(Request $request){
        try {
            $query = Api::query();
            
            // Filtro por nome
            // Select * from setores where nome like %VAR%
            if ($request->filled('nome')) {
                $query->where('nome', 'like', '%'.$request->nome . '%');
            }
        }
    }
}