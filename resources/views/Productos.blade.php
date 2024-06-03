<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aqui se muestran todos los productos</h1>

    <a href="/Productos/Crear">Nuevo Producto</a>

    <ul>
      @foreach ($productos as $producto)
      <li>
        <a href="/Productos/{{$producto->producto_id}}">
            {{$producto->producto_nombre}}
        </a>
      </li>
      @endforeach
        
    </ul>
</body>
</html>