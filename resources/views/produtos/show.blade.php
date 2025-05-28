@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">
                        <i class="fas fa-box-open mr-2"></i>Detalhes do Produto
                    </h2>
                    <div class="btn-group">
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-light" title="Editar">
                            <i class="fas fa-edit"></i> <span class="d-none d-sm-inline">Editar</span>
                        </a>
                        <a href="{{ route('produtos.index') }}" class="btn btn-sm btn-light" title="Voltar">
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
                            <p class="detail-value">{{ $produto->id }}</p>
                        </div>

                        <div class="detail-item mb-3">
                            <h5 class="detail-label"><i class="fas fa-tag text-muted mr-2"></i>Nome</h5>
                            <p class="detail-value">{{ $produto->nome }}</p>
                        </div>

                        <div class="detail-item mb-3">
                            <h5 class="detail-label"><i class="fas fa-dollar-sign text-muted mr-2"></i>Preço</h5>
                            <p class="detail-value text-success font-weight-bold">
                                R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-item mb-3">
                            <h5 class="detail-label"><i class="fas fa-list-alt text-muted mr-2"></i>Tipo de Produto</h5>
                            <p class="detail-value">
                                {{ $produto->tipoProduto->nome ?? 'N/D' }}
                                @isset($produto->tipoProduto->descricao)
                                    <small class="text-muted d-block mt-1">{{ $produto->tipoProduto->descricao }}</small>
                                @endisset
                            </p>
                        </div>

                        <div class="detail-item mb-3">
                            <h5 class="detail-label"><i class="fas fa-truck text-muted mr-2"></i>Fornecedor</h5>
                            <p class="detail-value">
                                {{ $produto->fornecedor->nome ?? 'N/D' }}
                                @isset($produto->fornecedor->contato)
                                    <small class="text-muted d-block mt-1">
                                        <i class="fas fa-phone-alt mr-1"></i> {{ $produto->fornecedor->contato }}
                                    </small>
                                @endisset
                            </p>
                        </div>

                        @isset($produto->observacoes)
                            <div class="detail-item">
                                <h5 class="detail-label"><i class="fas fa-sticky-note text-muted mr-2"></i>Observações</h5>
                                <p class="detail-value">{{ $produto->observacoes }}</p>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>

            <div class="card-footer bg-light">
                <div class="d-flex justify-content-between">
                    <small class="text-muted">
                        <i class="far fa-calendar-alt mr-1"></i>
                        Criado em: {{ $produto->created_at->format('d/m/Y H:i') }}
                    </small>
                    <small class="text-muted">
                        <i class="far fa-calendar-check mr-1"></i>
                        Atualizado em: {{ $produto->updated_at->format('d/m/Y H:i') }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection
