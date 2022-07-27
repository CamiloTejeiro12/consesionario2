<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();


	$cod_repara = $_POST['cod_repara'];
	$precio_repara = $_POST['precio_repara'];
	$reparacion_repara = $_POST['reparacion_repara'];

	$query = "UPDATE reparaciones SET precio_repara = $precio_repara, reparacion_repara = '$reparacion_repara' WHERE cod_repara = '$cod_repara'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:reparaciones.php");
	}else{
		Header("Location:actualizar_repara.php?error=1");
	}

?>