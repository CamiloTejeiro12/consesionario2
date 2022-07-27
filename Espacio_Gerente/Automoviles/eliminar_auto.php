<?php 
	include("conexion.php");
	$conn = conectar();

	$matricula_auto = $_GET['matricula_auto'];

	$query = "DELETE FROM automovil WHERE matricula_auto = '$matricula_auto'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: automoviles.php");
	}

?>