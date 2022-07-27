<?php 
	include("conexion.php");
	$conn = conectar();

	$codigo_vende = $_GET['codigo_vende'];

	$query = "DELETE FROM vendedor WHERE codigo_vende = '$codigo_vende'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: vendedores.php");
	}

?>