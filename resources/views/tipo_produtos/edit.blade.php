@extends('layouts.app')

@section('content')
    <h1>Editar Tipo de Produto</h1>

    <form action="{{ route('tipo_produtos.update', $tipoProduto) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $tipoProduto->nome }}">

        <button type="submit">Atualizar</button>
    </form>
@endsection
