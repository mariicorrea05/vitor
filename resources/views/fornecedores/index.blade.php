@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Lista de Fornecedores</h1>
            <a href="{{ route('fornecedores.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> <span class="d-none d-md-inline">Novo Fornecedor</span>
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col" class="text-right">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($fornecedores as $fornecedor)
                        <tr>
                            <td class="text-center">{{ $fornecedor->id }}</td>
                            <td>
                                <a href="{{ route('fornecedores.show', $fornecedor->id) }}" class="text-primary font-weight-bold">
                                    {{ $fornecedor->nome }}
                                </a>
                            </td>
                            <td>{{ $fornecedor->telefone ?? 'N/D' }}</td>
                            <td>{{ $fornecedor->email ?? 'N/D' }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="btn btn-sm btn-warning" title="Editar">
                                        <i class="fas fa-edit"></i> <span class="d-none d-md-inline">Editar</span>
                                    </a>
                                    <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este fornecedor?')" title="Excluir">
                                            <i class="fas fa-trash-alt"></i> <span class="d-none d-md-inline">Excluir</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">Nenhum Fornecedor cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

