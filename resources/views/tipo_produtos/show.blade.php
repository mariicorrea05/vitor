@extends('layouts.app')

@section('content')
    <h1>Detalhes do Tipo de Produto</h1>

    <p><strong>Nome:</strong> {{ $tipoProduto->nome }}</p>

    <a href="{{ route('tipo_produtos.edit', $tipoProduto) }}">Editar</a>
    <form action="{{ route('tipo_produtos.destroy', $tipoProduto) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
