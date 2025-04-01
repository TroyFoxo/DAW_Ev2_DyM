<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halcon - Distribuidora de Materiales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Halcon</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')  {{-- Aquí se insertará el contenido de las vistas --}}
    </div>

    <footer class="text-center mt-4 p-3 bg-light">
        <p>&copy; 2025 Halcon - Distribuidora de Materiales</p>
    </footer>
</body>
</html>
