<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_compras";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

session_start();
$usuario = $_SESSION['usuario'];

if(!isset($usuario))
{
    header("location: inicio.php");
}else
{
    echo "<h1> Bienvenido $usuario </h1>";

echo "<a href='logica/salir.php'>salir</a>";
echo "<br>";
echo "<a href='nuevo_producto.php'>realizar pedidos</a>";
echo "<br>";
echo "<a href='tabla_productos.php'>ver productos registrados</a>";



}

?>
