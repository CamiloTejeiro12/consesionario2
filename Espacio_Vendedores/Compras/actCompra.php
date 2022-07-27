<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();


	$codigo_compra = $_POST['codigo_compra'];
	$fecha_de_compra = $_POST['fecha_de_compra'];
	$precio_compra = $_POST['precio_compra'];
	$cedula_usa = $_POST['cedula_usa'];
	$matricula_auto = $_POST['matricula_auto'];

	$query = "UPDATE compra SET fecha_de_compra = '$fecha_de_compra', precio_compra = $precio_compra, fk_usador_cedula_usa = $cedula_usa, fk_automovil_matricula_auto = '$matricula_auto' WHERE codigo_compra = '$codigo_compra'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:compras.php");
	}{
		Header("Location:actualizar_compra.php?error=1");
	}

?>