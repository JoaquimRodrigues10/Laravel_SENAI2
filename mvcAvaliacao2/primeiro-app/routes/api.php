<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetorApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Rotas API
Route::get('setores',[ApiController::class, 'listarApi']);
Route::post('setor/add',[ApiController::class, 'addApi']);
Route::put('setor/atualizar/{id}',[ApiController::class, 'updateApi']);
Route::put('setor/deletar/{id}',[SeApiController::class, 'deletarApi']);