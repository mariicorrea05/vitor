@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">
                            <i class="fas fa-user-plus mr-2"></i>Cadastrar Novo Cliente
                        </h3>
                        <a href="{{ route('clientes.index') }}" class="btn btn-sm btn-light">
                            <i class="fas fa-arrow-left mr-1"></i> Voltar
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('clientes.store') }}" method="POST" id="clienteForm">
                        @csrf

                        <div class="form-group">
                            <label for="nome" class="font-weight-bold">
                                <i class="fas fa-user mr-1"></i>Nome Completo *
                            </label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                                   id="nome" name="nome" placeholder="Digite o nome completo"
                                   value="{{ old('nome') }}" required>
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email" class="font-weight-bold">
                                    <i class="fas fa-envelope mr-1"></i>E-mail *
                                </label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" placeholder="exemplo@dominio.com"
                                       value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="telefone" class="font-weight-bold">
                                    <i class="fas fa-phone mr-1"></i>Telefone *
                                </label>
                                <input type="text" class="form-control telefone @error('telefone') is-invalid @enderror" 
                                       id="telefone" name="telefone" placeholder="(00) 00000-0000"
                                       value="{{ old('telefone') }}" required>
                                @error('telefone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="fas fa-eraser mr-1"></i> Limpar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-1"></i> Cadastrar Cliente
                            </button>
                        </div>

                        <div class="text-muted mt-3">
                            <small>Os campos marcados com * são obrigatórios</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
