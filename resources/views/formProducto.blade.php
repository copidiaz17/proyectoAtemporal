<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulario para crear un nuevo producto</h1>

<form action="/Productos" method="POST">

    @csrf

    <label for="">
        Nombre <input type="text" name="nombre">
    </label>
    <br>
    <br>
    
    <label for="">
        Descripcion <input type="text" name="descripcion">
    </label>
    <br>
    <br>

    <label for="">
        Imagen <input type="text" name="imagen">
    </label>
    <br>
    <br>

    <label for="">
        Precio <input type="text" name="precio">
    </label>
    <br>
    <br>
    <button type="submit">Crear</button>

</form>
    
</body>
</html>