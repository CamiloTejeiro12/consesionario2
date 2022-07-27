<?php 
	include("conexion.php");
	$conn = conectar();

	$codigo_revi = $_GET['codigo_revi'];

	$query = "DELETE FROM revisiones WHERE codigo_revi = '$codigo_revi'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: revisiones.php");
	}

?>