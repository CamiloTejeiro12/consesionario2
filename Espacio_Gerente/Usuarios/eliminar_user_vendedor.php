<?php 
	include("conexion.php");
	$conn = conectar();

	$vendedor = $_GET['vendedor'];

	$query = "DELETE FROM usuarios_vendedor WHERE vendedor = '$vendedor'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: usuarios.php");
	}

?>