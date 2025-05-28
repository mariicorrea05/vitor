@extends('layouts.app')

@section('content')
    <h1>Detalhes do Cliente</h1>

    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Email:</strong> {{ $cliente->email }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>

    <a href="{{ route('clientes.edit', $cliente) }}">Editar</a>
    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
