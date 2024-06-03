<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulario para editar un producto</h1>

<form action="/Productos/{{$producto->producto_id}}" method="POST">

    @csrf
    @method('PUT')

    <label for="">
        Nombre <input type="text" name="nombre" value = "{{$producto->producto_nombre}}">
    </label>
    <br>
    <br>
    
    <label for="">
        Descripcion <input type="text" name="descripcion" value = "{{$producto->producto_descripcion}}">
    </label>
    <br>
    <br>

    <label for="">
        Imagen <input type="text" name="imagen" value = "{{$producto->producto_imagen}}">
    </label>
    <br>
    <br>

    <label for="">
        Precio <input type="text" name="precio" value = "{{$producto->producto_precio}}">
    </label>
    <br>
    <br>
    <button type="submit">Editar</button>

</form>
    
</body>
</html>