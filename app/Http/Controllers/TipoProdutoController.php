<?php

namespace App\Http\Controllers;

use App\Models\TipoProduto;
use Illuminate\Http\Request;

class TipoProdutoController extends Controller
{
    public function index()
    {
        $tipos = TipoProduto::all();
        return view('tipo_produtos.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipo_produtos.create');
    }

    public function store(Request $request)
    {
        TipoProduto::create($request->all());
        return redirect()->route('tipo_produtos.index')->with('success', 'Tipo de produto criado com sucesso.');
    }

    public function show(TipoProduto $tipoProduto)
    {
        return view('tipo_produtos.show', compact('tipoProduto'));
    }

    public function edit(TipoProduto $tipoProduto)
    {
        return view('tipo_produtos.edit', compact('tipoProduto'));
    }

    public function update(Request $request, TipoProduto $tipoProduto)
    {
        $tipoProduto->update($request->all());
        return redirect()->route('tipo_produtos.index')->with('success', 'Tipo de produto atualizado com sucesso.');
    }

    public function destroy(TipoProduto $tipoProduto)
    {
        $tipoProduto->delete();
        return redirect()->route('tipo_produtos.index')->with('success', 'Tipo de produto excluído com sucesso.');
    }
}
