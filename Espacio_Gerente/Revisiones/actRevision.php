<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();


	$codigo_revi = $_POST['codigo_revi'];
	$filtro = $_POST['filtro'];
	$aceite = $_POST['aceite'];
	$frenos = $_POST['frenos'];
	$fecha_revi = $_POST['fecha_revi'];
	$matricula_auto = $_POST['matricula_auto'];
    $detalle = $_POST['detalle'];
	


	$query = "UPDATE revisiones SET filtro = '$filtro', aceite = '$aceite', frenos = '$frenos', fecha_revi = '$fecha_revi', fk_automovil_matricula_auto = '$matricula_auto', detalle = '$detalle' WHERE codigo_revi = '$codigo_revi'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:revisiones.php");
	}else{
		Header("Location:actualizar_revision.php?error=1");
	}

?>