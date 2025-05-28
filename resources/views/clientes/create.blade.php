@extends('layouts.app')

@section('content')
    <h1>Novo Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">

        <button type="submit">Salvar</button>
    </form>
@endsection
