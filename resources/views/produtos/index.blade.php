@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Lista de Produtos</h1>
            <a href="{{ route('produtos.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> <span class="d-none d-md-inline">Novo Produto</span>
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col" class="text-right">Preço</th>
                        <th scope="col">Tipo Produto</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produtos as $produto)
                        <tr>
                            <td class="text-center">{{ $produto->id }}</td>
                            <td>
                                <a href="{{ route('produtos.show', $produto->id) }}" class="text-primary font-weight-bold">
                                    {{ $produto->nome }}
                                </a>
                            </td>
                            <td class="text-right">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                            <td>{{ $produto->tipoProduto->nome ?? 'N/D' }}</td>
                            <td>{{ $produto->fornecedor->nome ?? 'N/D' }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning" title="Editar">
                                        <i class="fas fa-edit"></i> <span class="d-none d-md-inline">Editar</span>
                                    </a>
                                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')" title="Excluir">
                                            <i class="fas fa-trash-alt"></i> <span class="d-none d-md-inline">Excluir</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">Nenhum produto cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

