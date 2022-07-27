<?php 
	include("conexion.php");
	$conn = conectar();

	$cedula_usa = $_GET['cedula_usa'];

	$query = "DELETE FROM usador WHERE cedula_usa = '$cedula_usa'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: usador.php");
	}

?>