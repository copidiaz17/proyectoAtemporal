<!DOCTYPE html>
<html>
<head>
    <title>Productos en {{ $categoria->categoria_nombre }}</title>
</head>
<body>
    <h1>Productos en {{ $categoria->categoria_nombre }}</h1>
    <ul>
        @foreach($productos as $producto)
           <a href="/Productos/{{$producto->id}}"> <li>{{ $producto->producto_nombre }} - {{ $producto->producto_precio }}</li> </a>
        @endforeach
    </ul>
    <a href="{{ url('/Productos/Categorias') }}">Volver a Categorías</a>
</body>
</html>