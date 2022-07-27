
<?php

include("conexion.php");

$conn=conectar();

session_start();


	$cliente = $_POST['cliente'];
	$contraseña = $_POST['contraseña'];


	$query = "INSERT INTO usuarios_cliente VALUES('$cliente', '$contraseña')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:agregar_usuario_cliente.php?error=1");
	}

	

?>