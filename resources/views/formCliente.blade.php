<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulario de registro de clientes</h1>

   

    <form action="/Clientes/Login" method="POST">

    @csrf
    
    <label for="">
        Nombre <input type="text" name = "nombre">
    </label>
    <br>
    <br>

    <label for="">
        Direccion <input type="text" name = "direccion">
    </label>
    <br>
    <br>

    <label for="">
        Localidad <input type="text" name = "localidad">
    </label>
    <br>
    <br>

    <label for="">
        Email <input type="text" name = "email">
    </label>
    <br>
    <br>

    <div>

    <label for="">
        Contraseña <input type="text" name = "contraseña">
    </label>
    <br>
    <br>
    </div>
   <label for="">
         Telefono <input type="text" name = "telefono">
   </label>
   <br>
   <br>


    <button type="submit">Registrar</button>

    </form>

</body>
</html>