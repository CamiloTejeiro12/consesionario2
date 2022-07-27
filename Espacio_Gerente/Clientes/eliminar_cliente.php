<?php 
	include("conexion.php");
	$conn = conectar();

	$cedula_cli = $_GET['cedula_cli'];

	$query = "DELETE FROM cliente WHERE cedula_cli = '$cedula_cli'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: clientes.php");
	}

?>