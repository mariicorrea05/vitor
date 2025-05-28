@extends('layouts.app')

@section('content')
    <h1>Clientes</h1>

    <a href="{{ route('clientes.create') }}">Novo Cliente</a>

    <ul>
        @foreach ($clientes as $cliente)
            <li>
                {{ $cliente->nome }} - <a href="{{ route('clientes.show', $cliente) }}">Ver</a> |
                <a href="{{ route('clientes.edit', $cliente) }}">Editar</a> |
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
