@extends('layouts.app')

@section('content')
    <h1>Novo Tipo de Produto</h1>

    <form action="{{ route('tipo_produtos.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
    </form>
@endsection
