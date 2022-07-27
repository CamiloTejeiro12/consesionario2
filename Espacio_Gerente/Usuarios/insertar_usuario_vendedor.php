
<?php

include("conexion.php");

$conn=conectar();

session_start();


	$vendedor = $_POST['vendedor'];
	$contraseña = $_POST['contraseña'];


	$query = "INSERT INTO usuarios_vendedor VALUES('$vendedor', '$contraseña')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:agregar_usuario_vendedor.php?error=1");
	}

	

?>