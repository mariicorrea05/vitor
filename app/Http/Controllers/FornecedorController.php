<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        Fornecedor::create($request->all());
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor criado com sucesso.');
    }

    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedores.show', compact('fornecedor'));
    }

    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        $fornecedor->update($request->all());
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor atualizado com sucesso.');
    }

    public function destroy(Fornecedor $fornecedor)
    {
        try {
            // Verifica se o fornecedor está sendo usado por algum produto
            if ($fornecedor->produtos()->count() > 0) {
                return redirect()->route('fornecedores.index')->with('error', 'Fornecedor não pode ser excluído, pois está associado a um ou mais produtos.');
            }
        } catch (\Exception $e) {
            return redirect()->route('fornecedores.index')->with('error', 'Erro ao excluir fornecedor: ' . $e->getMessage());
        }
        $fornecedor->delete();
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor excluído com sucesso.');
    }
}
