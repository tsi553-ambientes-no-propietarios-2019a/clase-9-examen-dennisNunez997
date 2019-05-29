<?php 
include('utils.php');

if($_POST) {
	if (isset($_POST['username']) && isset($_POST['pass1']) && !empty($_POST['username']) && !empty($_POST['pass1'])) {
        $id = $_POST['id'];
        $nombre = $_POST['Nombre'];
		$rol = $_POST['type'];
        $usuario = $_POST['username'];
        $clave1 = $_POST['pass1'];
        $clave2 = $_POST['pass2'];
        
        
        if($clave1 == $clave2)
        {
            $sql_insert = "INSERT INTO usuario
		    (id_user, nombre, rol_usuario, username, pass)
		    VALUES ('$id','$nombre','$rol','$usuario','$clave1')";

		    echo $sql_insert;
		    $conn->query($sql_insert);

		    if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		    } else {
			    redirect('../inicio.php');
            }
        }
        else
        {
           header('Location: ../registro_tienda.php?error_message=Contraseñas incorrectas!');
		    exit; 
        }



	} else {
		header('Location: ../registro_tienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro_tienda.php');
	exit;
}
?>