@extends('layouts.app')

@section('content')
    <h1>Tipos de Produtos</h1>

    <a href="{{ route('tipo_produtos.create') }}">Novo Tipo de Produto</a>

    <ul>
        @foreach ($tipos as $tipo)
            <li>
                {{ $tipo->nome }} - 
                <a href="{{ route('tipo_produtos.show', $tipo) }}">Ver</a> |
                <a href="{{ route('tipo_produtos.edit', $tipo) }}">Editar</a> |
                <form action="{{ route('tipo_produtos.destroy', $tipo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
