
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();


	$fecha_de_compra = $_POST['fecha_de_compra'];
	$precio_compra = $_POST['precio_compra'];
	$codigo_compra = $_POST['codigo_compra'];
	$cedula_usa = $_POST['cedula_usa'];
	$matricula_auto = $_POST['matricula_auto'];

	


	$query = "INSERT INTO compra VALUES('$fecha_de_compra', $precio_compra, $codigo_compra, $cedula_usa, '$matricula_auto')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:compras.php");
	}else{
		Header("Location:agregar_compra.php?error=1");
	}
?>