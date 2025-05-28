@extends('layouts.app')

@section('content')
    <h1>Lista de Produtos</h1>

    <a href="{{ route('produtos.create') }}">Novo Produto</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Tipo Produto</th>
                <th>Fornecedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td><a href="{{ route('produtos.show', $produto->id) }}">{{ $produto->nome }}</a></td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->tipoProduto->nome ?? 'N/D' }}</td>
                    <td>{{ $produto->fornecedor->nome ?? 'N/D' }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a> |
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Confirma exclusão?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">Nenhum produto cadastrado.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
