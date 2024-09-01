<ph<?php
use Illuminate\Support\Facades\Log;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    </style>
</head>
<body>
  <a href="/Productos">Volver a productos</a>

  <h1>Nombre del producto: {{$producto->producto_nombre}}</h1>  
  <h2>Descripcion del producto: {{$producto->producto_descripcion}}</h2>
  <h2>Precio: ${{$producto->producto_precio}}</h2>
  @if($producto->producto_imagen)
        <img src="{{ asset('storage/' . $producto->producto_imagen) }}" alt="Imagen de {{$producto->producto_nombre}}">
    @else
        <img src="{{ asset('images/productos/default-image.jpg') }}" alt="Imagen predeterminada">
    @endif
  
  <a href="/Productos/{{$producto->id}}/Editar">Editar Producto</a>
  <br>
  <br>

  <form action="/Productos/{{$producto->id}}" method="POST">

  @csrf
  @method('DELETE')

  <button type="submit">Eliminar Producto</button>

  </form>

</body>
</html>