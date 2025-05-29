@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Lista de Tipos</h1>
            <a href="{{ route('tipo_produtos.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> <span class="d-none d-md-inline">Novo tipoProduto</span>
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Tipo</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tipos as $tipoProduto)
                        <tr>
                            <td class="text-center">{{ $tipoProduto->id }}</td>
                            <td>
                                <a href="{{ route('tipo_produtos.show', $tipoProduto->id) }}" class="text-primary font-weight-bold">
                                    {{ $tipoProduto->nome }}
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('tipo_produtos.edit', $tipoProduto->id) }}" class="btn btn-sm btn-warning" title="Editar">
                                        <i class="fas fa-edit"></i> <span class="d-none d-md-inline">Editar</span>
                                    </a>
                                    <form action="{{ route('tipo_produtos.destroy', $tipoProduto->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este tipoProduto?')" title="Excluir">
                                            <i class="fas fa-trash-alt"></i> <span class="d-none d-md-inline">Excluir</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">Nenhum tipoProduto cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

