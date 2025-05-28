<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Sistema Laravel</title>
    <!-- CSS Bootstrap CDN para exemplo simples -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Meu Sistema</a>
            <div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="{{ route('produtos.index') }}" class="nav-link">Produtos</a></li>
                    <li class="nav-item"><a href="{{ route('fornecedores.index') }}" class="nav-link">Fornecedores</a></li>
                    <li class="nav-item"><a href="{{ route('tipo_produtos.index') }}" class="nav-link">Tipos de Produto</a></li>
                    <li class="nav-item"><a href="{{ route('clientes.index') }}" class="nav-link">Cliente</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <!-- JS Bootstrap CDN para exemplo simples -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
