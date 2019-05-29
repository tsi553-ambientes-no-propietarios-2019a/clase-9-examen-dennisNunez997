<?php 
include('utils.php');

if($_POST) {
	if (isset($_POST['codigo']) && isset($_POST['nom_prod']) && !empty($_POST['codigo']) && !empty($_POST['nom_prod'])) {
		$codigo = $_POST['codigo'];
		$nom_prod = $_POST['nom_prod'];
        $precio_prod = $_POST['precio_prod'];
        
        
        $sql_insert = "INSERT INTO producto
		(id_producto, nom_producto, precio_producto)
		VALUES ('$codigo','$nom_prod','$precio_prod')";
		echo $sql_insert;
		$conn->query($sql_insert); 
		if ($conn->error) {
		echo 'Ocurrió un error ' .  $conn->error;
		} else {
		    redirect('../admin_productos.php');
        }
        
        



	} else {
		header('Location: ../admin.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../admin.php');
	exit;
}
?>