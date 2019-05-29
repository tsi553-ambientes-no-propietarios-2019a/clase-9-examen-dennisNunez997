
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
                    <form action="logica/loguear.php" method="POST">
                         <h1>Registro de pedidos</h1>
                         <strong>Ingrese producto: </strong>
                         <input type="text" name="producto" placeholder="digite producto">
                         <br><br>
                         <strong>Ingrese cantidad</strong>
                         <input type="text" name="cantidad" placeholder="digite cantidad">
                         <br><br>
                         <button type="submit" class="btn btn-primary">Iniciar</button>

                    </form>
                </div>
            </div>
          </div>
     
</body>
</html>


