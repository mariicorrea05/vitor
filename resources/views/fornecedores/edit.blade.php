@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="h5 mb-0">
                    <i class="fas fa-edit mr-2"></i>Editar Fornecedor
                </h2>
            </div>

            <div class="card-body">
                <form action="{{ route('fornecedores.update', $fornecedor->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" class="font-weight-bold">
                                <i class="fas fa-tag mr-1"></i>Nome do Fornecedor
                            </label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                                   id="nome" name="nome" 
                                   value="{{ old('nome', $fornecedor->nome) }}" required>
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tipo_fornecedor_id" class="font-weight-bold">
                                <i class="fas fa-list-alt mr-1"></i>Telefone do Fornecedor
                            </label>
                            <input type="text" class="form-control @error('telefone') is-invalid @enderror" 
                                   id="telefone" name="telefone" 
                                   value="{{ old('telefone', $fornecedor->telefone) }}" required>
                            @error('telefone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="fornecedor_id" class="font-weight-bold">
                                <i class="fas fa-truck mr-1"></i>Email
                            </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" 
                                   value="{{ old('email', $fornecedor->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{ route('fornecedores.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left mr-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-1"></i> Atualizar Fornecedor
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection