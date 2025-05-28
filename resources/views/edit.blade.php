@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome', $produto->nome) }}" required><br><br>

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" value="{{ old('preco', $produto->preco) }}" required><br><br>

        <label>Tipo Produto:</label>
        <select name="tipo_produto_id" required>
            <option value="">Selecione</option>
            @foreach ($tipos as $tipo)
                <option value="{{ $tipo->id }}" {{ (old('tipo_produto_id', $produto->tipo_produto_id) == $tipo->id) ? 'selected' : '' }}>
                    {{ $tipo->nome }}
                </option>
            @endforeach
        </select><br><br>

        <label>Fornecedor:</label>
        <select name="fornecedor_id" required>
            <option value="">Selecione</option>
            @foreach ($fornecedores as $fornecedor)
                <option value="{{ $fornecedor->id }}" {{ (old('fornecedor_id', $produto->fornecedor_id) == $fornecedor->id) ? 'selected' : '' }}>
                    {{ $fornecedor->nome }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Atualizar</button>
        <a href="{{ route('produtos.index') }}">Cancelar</a>
    </form>
@endsection
