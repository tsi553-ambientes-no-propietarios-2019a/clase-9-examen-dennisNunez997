<?PHP


?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-squiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

</head>
<body>

     <div class="contenedor">

          <div class="row">
               <div class="col-sm">
                    <form action="logica/registro.php" method="POST">
                         <h1>Registro de Usuarios</h1>
                         <strong>id: </strong>
                         <br><br>
                         <input type="text" name="id" placeholder="digite su nombre">
                         <br><br>
                         <strong>Nombre: </strong>
                         <input type="text" name="Nombre" placeholder="digite su nombre">
                         <br><br>
                         <strong>Rol:</strong>
                         <select name="type" required="required">
                              <option value="administrador">Administrador</option>
                              <option value="cliente">Cliente</option>
                         </select>
                         <br><br>
                         <strong>Nombre de usuario: </strong>
                         <input type="text" name="username" placeholder="digite nombre de usuario">
                         <br><br>
                         <strong>Contraseña</strong>
                         <input type="password" name="pass1" placeholder="digite contraseña">
                         <br><br>
                         <strong>Ingrese su contraseña otra vez</strong>
                         <input type="password" name="pass2" placeholder="repita la contraseña">
                         <br><br>
                         <button type="submit" class="btn btn-primary">Registrar</button>

                    </form>
               </div>
          </div>
     </div>
     
</body>
</html>
