@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">
                        <i class="fas fa-box-open mr-2"></i>Detalhes do Tipo
                    </h2>
                    <div class="btn-group">
                        <a href="{{ route('tipo_produtos.edit', $tipoProduto->id) }}" class="btn btn-sm btn-light" title="Editar">
                            <i class="fas fa-edit"></i> <span class="d-none d-sm-inline">Editar</span>
                        </a>
                        <a href="{{ route('tipo_produtos.index') }}" class="btn btn-sm btn-light" title="Voltar">
                            <i class="fas fa-arrow-left"></i> <span class="d-none d-sm-inline">Voltar</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-item mb-3">
                            <h5 class="detail-label"><i class="fas fa-fingerprint text-muted mr-2"></i>ID</h5>
                            <p class="detail-value">{{ $tipoProduto->id }}</p>
                        </div>

                        <div class="detail-item mb-3">
                            <h5 class="detail-label"><i class="fas fa-tag text-muted mr-2"></i>Tipo</h5>
                            <p class="detail-value">{{ $tipoProduto->nome }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
