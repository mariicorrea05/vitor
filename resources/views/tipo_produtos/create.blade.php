@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h2 class="h5 mb-0">
                    <i class="fas fa-plus-circle mr-2"></i>Cadastrar Novo Tipo
                </h2>
            </div>

            <div class="card-body">
                <form action="{{ route('tipo_produtos.store') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" class="font-weight-bold">
                                <i class="fas fa-tag mr-1"></i>Tipo de produto
                            </label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                                   id="nome" name="nome" required>
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{ route('tipo_produtos.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-times mr-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check mr-1"></i> Cadastrar Tipo
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
