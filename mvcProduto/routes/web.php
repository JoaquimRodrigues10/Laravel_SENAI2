<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// GET - listar os produtos cadastrados 
Route::get('/produtos/listar',[ProdutoController::class, 'listar'])->name('produto.listar');