<?php
    require 'conexion.php';
    session_start();
    
    //datos de tienda
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $q= "SELECT COUNT(*) as contar from usuario where username = '$usuario' and pass = '$clave'"; 
    $consulta = mysqli_query($conexion,$q);
    $array=mysqli_fetch_array($consulta);
    var_dump($consulta);

    if($array['contar'] > 0)
    {
        $_SESSION['usuario'] = $usuario;
        header("location: ../index.php");
    }
    else
    {
        echo "datos incorrectos";
    }


?>