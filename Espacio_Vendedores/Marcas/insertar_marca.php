
<?php

include("conexion.php");

$conn=conectar();

session_start();

	$marca = $_POST['nombre_marca'];

	$query = "INSERT INTO marca VALUES('$marca')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:marcas.php");
	}else{
		Header("Location:agregar_marca.php?error=1");
	}

?>