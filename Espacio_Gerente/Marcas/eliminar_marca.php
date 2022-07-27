<?php 



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	include("conexion.php");
	$conn = conectar();

	$nombre_marca = $_GET['nombre_marca'];

	$query = "DELETE FROM marca WHERE nombre_marca = '$nombre_marca'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: marcas.php");
	}

?>