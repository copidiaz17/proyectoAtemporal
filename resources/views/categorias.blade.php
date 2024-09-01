<!DOCTYPE html>
<html>
<head>
    <title>Categorías</title>
</head>
<body>
    <h1>Categorías</h1>
    <ul>
        @foreach($categorias as $categoria)
            <li>
                <a href="{{ url('/Productos/Categoria/' . $categoria->id) }}">
                    {{ $categoria->categoria_nombre }} ({{ $categoria->productos_count }})
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>