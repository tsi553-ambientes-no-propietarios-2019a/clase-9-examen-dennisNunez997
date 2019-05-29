<?php


$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_compras";


?>


<!DOCTYPE html>
<html>
<head>
    <title>Mostrar datos</title>
</head>
<body>
    <br>
    <table>
        <tr>
            <td>codigo</td>
            <td>producto</td>
            <td>precio</td>
        </tr>
            <?php
            $sql="SELECT * from producto";
            $result = mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result))
            {

            
            ?>
        <tr>
            <td><?php echo $mostrar['id_producto']?></td>
            <td><?php echo $mostrar['nom_producto']?></td>
            <td><?php echo $mostrar['precio_producto']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>