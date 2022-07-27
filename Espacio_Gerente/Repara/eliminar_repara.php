<?php 
	include("conexion.php");
	$conn = conectar();

	$matricula_auto_re = $_GET['matricula_auto_re'];

	$query = "DELETE FROM repara WHERE matricula_auto_re = '$matricula_auto_re'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: repara.php");
	}

?>