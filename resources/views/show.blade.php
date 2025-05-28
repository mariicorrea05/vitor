@extends('layouts.app')

@section('content')
    <h1>Detalhes do Produto</h1>

    <p><strong>ID:</strong> {{ $produto->id }}</p>
    <p><strong>Nome:</strong> {{ $produto->nome }}</p>
    <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    <p><strong>Tipo Produto:</strong> {{ $produto->tipoProduto->nome ?? 'N/D' }}</p>
    <p><strong>Fornecedor:</strong> {{ $produto->fornecedor->nome ?? 'N/D' }}</p>

    <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a> |
    <a href="{{ route('produtos.index') }}">Voltar</a>
@endsection
