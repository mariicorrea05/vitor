@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $cliente->email }}">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}">

        <button type="submit">Atualizar</button>
    </form>
@endsection
