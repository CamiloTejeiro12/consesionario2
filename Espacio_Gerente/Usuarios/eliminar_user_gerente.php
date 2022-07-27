<?php 
	include("conexion.php");
	$conn = conectar();

	$gerente = $_GET['gerente'];

	$query = "DELETE FROM usuarios_gerente WHERE gerente = '$gerente'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: usuarios.php");
	}

?>