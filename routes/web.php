<?php
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TipoProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('produtos', ProdutoController::class);
Route::resource('fornecedores', FornecedorController::class)->parameters([
    'fornecedores' => 'fornecedor'
]);

Route::resource('tipo_produtos', TipoProdutoController::class)->parameters([
    'tipo_produtos' => 'tipoProduto'
]);

Route::resource('clientes', ClienteController::class)->parameters([
    'clientes' => 'cliente'
]);

