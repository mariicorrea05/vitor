@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="h5 mb-0">
                    <i class="fas fa-edit mr-2"></i>Editar Produto
                </h2>
            </div>

            <div class="card-body">
                <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" class="font-weight-bold">
                                <i class="fas fa-tag mr-1"></i>Nome do Produto
                            </label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                                   id="nome" name="nome" 
                                   value="{{ old('nome', $produto->nome) }}" required>
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="preco" class="font-weight-bold">
                                <i class="fas fa-dollar-sign mr-1"></i>Preço
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="number" step="0.01" min="0" 
                                       class="form-control @error('preco') is-invalid @enderror" 
                                       id="preco" name="preco" 
                                       value="{{ old('preco', $produto->preco) }}" required>
                                @error('preco')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tipo_produto_id" class="font-weight-bold">
                                <i class="fas fa-list-alt mr-1"></i>Tipo de Produto
                            </label>
                            <select class="form-control @error('tipo_produto_id') is-invalid @enderror" 
                                    id="tipo_produto_id" name="tipo_produto_id" required>
                                <option value="">Selecione um tipo...</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->id }}" 
                                        {{ (old('tipo_produto_id', $produto->tipo_produto_id) == $tipo->id) ? 'selected' : '' }}>
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
                                <i class="fas fa-truck mr-1"></i>Fornecedor
                            </label>
                            <select class="form-control @error('fornecedor_id') is-invalid @enderror" 
                                    id="fornecedor_id" name="fornecedor_id" required>
                                <option value="">Selecione um fornecedor...</option>
                                @foreach ($fornecedores as $fornecedor)
                                    <option value="{{ $fornecedor->id }}" 
                                        {{ (old('fornecedor_id', $produto->fornecedor_id) == $fornecedor->id) ? 'selected' : '' }}>
                                        {{ $fornecedor->nome }}
                                    </option>
                                @endforeach
                            </select>
                            @error('fornecedor_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="observacoes" class="font-weight-bold">
                            <i class="fas fa-sticky-note mr-1"></i>Observações
                        </label>
                        <textarea class="form-control @error('observacoes') is-invalid @enderror" 
                                  id="observacoes" name="observacoes" 
                                  rows="3">{{ old('observacoes', $produto->observacoes ?? '') }}</textarea>
                        @error('observacoes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left mr-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-1"></i> Atualizar Produto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection