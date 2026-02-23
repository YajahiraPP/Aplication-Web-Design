<!DOCTYPE html>
<html>
<head>
    <title>Registrar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Registrar Producto</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <!-- Nombre -->
        <div class="mb-3">
            <label class="form-label">Nombre del Producto</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <!-- Precio -->
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" name="precio" step="0.01" class="form-control" required>
        </div>

        <!-- Categoría -->
        <div class="mb-3">
            <label class="form-label">Categoría</label>
            <select name="categoria_id" class="form-select" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Botón -->
        <button type="submit" class="btn btn-primary">
            Guardar
        </button>

        <a href="{{ route('products.show') }}" class="btn btn-secondary">
            Ver Productos
        </a>

    </form>

</body>
</html>