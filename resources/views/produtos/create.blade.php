@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h2 class="h5 mb-0">
                    <i class="fas fa-plus-circle mr-2"></i>Cadastrar Novo Produto
                </h2>
            </div>

            <div class="card-body">
                <form action="{{ route('produtos.store') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" class="font-weight-bold">
                                <i class="fas fa-tag mr-1"></i>Nome do Produto *
                            </label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                                   id="nome" name="nome" placeholder="Digite o nome do produto"
                                   value="{{ old('nome') }}" required>
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="preco" class="font-weight-bold">
                                <i class="fas fa-dollar-sign mr-1"></i>Preço *
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="number" step="0.01" min="0.01"
                                       class="form-control @error('preco') is-invalid @enderror" 
                                       id="preco" name="preco" placeholder="0,00"
                                       value="{{ old('preco') }}" required>
                                @error('preco')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tipo_produto_id" class="font-weight-bold">
                                <i class="fas fa-list-alt mr-1"></i>Tipo de Produto *
                            </label>
                            <select class="form-control @error('tipo_produto_id') is-invalid @enderror" 
                                    id="tipo_produto_id" name="tipo_produto_id" required>
                                <option value="" disabled selected>Selecione um tipo...</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->id }}" 
                                        {{ old('tipo_produto_id') == $tipo->id ? 'selected' : '' }}>
                                        {{ $tipo->nome }}
                                    </option>
                                @endforeach
                            </select>
                            @error('tipo_produto_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="fornecedor_id" class="font-weight-bold">
                                <i class="fas fa-truck mr-1"></i>Fornecedor *
                            </label>
                            <select class="form-control @error('fornecedor_id') is-invalid @enderror" 
                                    id="fornecedor_id" name="fornecedor_id" required>
                                <option value="" disabled selected>Selecione um fornecedor...</option>
                                @foreach ($fornecedores as $fornecedor)
                                    <option value="{{ $fornecedor->id }}" 
                                        {{ old('fornecedor_id') == $fornecedor->id ? 'selected' : '' }}>
                                        {{ $fornecedor->nome }}
                                    </option>
                                @endforeach
                            </select>
                            @error('fornecedor_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-times mr-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check mr-1"></i> Cadastrar Produto
                        </button>
                    </div>

                    <div class="text-muted mt-3">
                        <small>Os campos marcados com * são obrigatórios</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
