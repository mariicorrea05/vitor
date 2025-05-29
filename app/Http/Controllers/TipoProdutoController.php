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
        try {
            // Verifica se o tipo de produto está sendo usado por algum produto
            if ($tipoProduto->produtos()->count() > 0) {
                return redirect()->route('tipo_produtos.index')->with('error', 'Tipo de produto não pode ser excluído, pois está associado a um ou mais produtos.');
            }
        } catch (\Exception $e) {
            return redirect()->route('tipo_produtos.index')->with('error', 'Erro ao excluir tipo de produto: ' . $e->getMessage());
        }
        $tipoProduto->delete();
        return redirect()->route('tipo_produtos.index')->with('success', 'Tipo de produto excluído com sucesso.');
    }
}
