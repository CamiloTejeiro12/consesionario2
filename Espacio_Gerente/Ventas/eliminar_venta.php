<?php 
	include("conexion.php");
	$conn = conectar();

	$codigo_venta = $_GET['codigo_venta'];

	$query = "DELETE FROM venta WHERE codigo_venta = '$codigo_venta'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: ventas.php");
	}

?>