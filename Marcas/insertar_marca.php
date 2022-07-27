
<?php

include("conexion.php");

$conn=conectar();

session_start();

    $usuario=$_SESSION['nombre_usuario'];

	$marca = $_POST['nombre_marca'];

	$query = "INSERT INTO marca VALUES('$marca')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:marcas.php");
	}

?>