<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Listado de Productos</h2>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>$ {{ number_format($producto->precio, 2) }}</td>
                    <td>{{ $producto->categoria->nombre }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No hay productos registrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('products.index') }}" class="btn btn-primary">
        Volver al formulario
    </a>

</body>
</html>