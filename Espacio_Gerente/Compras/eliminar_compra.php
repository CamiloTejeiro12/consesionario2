<?php 
	include("conexion.php");
	$conn = conectar();

	$codigo_compra = $_GET['codigo_compra'];

	$query = "DELETE FROM compra WHERE codigo_compra = '$codigo_compra'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: compras.php");
	}

?>