<?php
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TipoProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;

Route::apiResource('produtos', ProdutoController::class);
Route::apiResource('tipo-produtos', TipoProdutoController::class);
Route::apiResource('fornecedores', FornecedorController::class);
Route::apiResource('clientes', ClienteController::class);
