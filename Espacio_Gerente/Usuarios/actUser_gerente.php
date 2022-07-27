<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

	$gerente = $_POST['gerente'];
	$contraseña = $_POST['contraseña'];
	
	$query = "UPDATE usuarios_gerente SET contraseña = '$contraseña'  WHERE gerente = '$gerente'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:actualizar_usuario_gerente.php?error=1");
	}

?>