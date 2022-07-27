<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

	$cliente = $_POST['cliente'];
	$contraseña = $_POST['contraseña'];
	
	$query = "UPDATE usuarios_cliente SET contraseña= '$contraseña' WHERE cliente = '$cliente'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:actualizar_usuario_cliente.php?error=1");
	}

?>