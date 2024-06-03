<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <a href="/Productos">Volver a productos</a>

  <h1>Nombre del producto: {{$producto->producto_nombre}}</h1>  
  <h2>Descripcion del producto: {{$producto->producto_descripcion}}</h2>
  <h2>Precio: ${{$producto->producto_precio}}</h2>

  <a href="/Productos/{{$producto->producto_id}}/Editar">Editar Producto</a>
  <br>
  <br>

  <form action="/Productos/{{$producto->producto_id}}" method="POST">

  @csrf
  @method('DELETE')

  <button type="submit">Eliminar Producto</button>

  </form>

</body>
</html>