<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <form action="/Clientes/Login" method="POST">
        @csrf   

    <label for="">Email</label> 
    <input type="text" name="cliente_email" id="">

    <br><br>

    <label for="">Contraseña</label> 
    <input type="password" name="cliente_contraseña" id="">

    <div>
        <button type="submit">Login</button>
    </div>







    </form>

    
</body>
</html>