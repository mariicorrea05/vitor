@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="h5 mb-0">
                    <i class="fas fa-edit mr-2"></i>Editar Tipo
                </h2>
            </div>

            <div class="card-body">
                <form action="{{ route('tipo_produtos.update', $tipoProduto->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" class="font-weight-bold">
                                <i class="fas fa-tag mr-1"></i>Tipo de Produtos
                            </label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                                   id="nome" name="nome" 
                                   value="{{ old('nome', $tipoProduto->nome) }}" required>
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{ route('tipo_produtos.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left mr-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-1"></i> Atualizar Tipo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection