<?php 
	include("conexion.php");
	$conn = conectar();

	$cod_repara = $_GET['cod_repara'];

	$query = "DELETE FROM reparaciones WHERE cod_repara = '$cod_repara'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: reparaciones.php");
	}

?>