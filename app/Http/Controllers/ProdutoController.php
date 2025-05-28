<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\TipoProduto;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with(['tipoProduto', 'fornecedor'])->get();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $tipos = TipoProduto::all();
        $fornecedores = Fornecedor::all();
        return view('produtos.create', compact('tipos', 'fornecedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'tipo_produto_id' => 'required|exists:tipo_produtos,id',
            'fornecedor_id' => 'required|exists:fornecedores,id',
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    public function show(Produto $produto)
    {
        $produto->load(['tipoProduto', 'fornecedor']);
        return view('produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        $tipos = TipoProduto::all();
        $fornecedores = Fornecedor::all();
        return view('produtos.edit', compact('produto', 'tipos', 'fornecedores'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'tipo_produto_id' => 'required|exists:tipo_produtos,id',
            'fornecedor_id' => 'required|exists:fornecedores,id',
        ]);

        $produto->update($request->all());

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
