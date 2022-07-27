
<?php

include("conexion.php");

$conn=conectar();

session_start();

	$gerente = $_POST['gerente'];
	$contraseña = $_POST['contraseña'];


	$query = "INSERT INTO usuarios_gerente VALUES('$gerente', '$contraseña')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:agregar_usuario_gerente.php?error=1");
	}


?>