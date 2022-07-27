<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();


	$nombre_marca_vieja = $_GET['marca'];

	$nombre_marca_nueva = $_POST['nombre_marca'];
	
	$query = "UPDATE marca SET nombre_marca = '$nombre_marca_nueva' WHERE nombre_marca = '$nombre_marca_vieja'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:marcas.php");
	}

?>