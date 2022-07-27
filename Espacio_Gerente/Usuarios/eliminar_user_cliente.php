<?php 
	include("conexion.php");
	$conn = conectar();

	$cliente = $_GET['cliente'];

	$query = "DELETE FROM usuarios_cliente WHERE cliente = '$cliente'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: usuarios.php");
	}

?>