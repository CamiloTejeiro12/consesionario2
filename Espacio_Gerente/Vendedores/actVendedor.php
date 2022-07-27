<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();


	$codigo_vende = $_POST['codigo_vende'];
	$nombre_vende = $_POST['nombre_vende'];
	$telefono_vende = $_POST['telefono_vende'];



	$query = "UPDATE vendedor SET nombre_vende = '$nombre_vende', telefono_vende = $telefono_vende WHERE codigo_vende = '$codigo_vende'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:vendedores.php");
	}else{
		Header("Location:actualizar_vendedor.php?error=1");
	}

?>