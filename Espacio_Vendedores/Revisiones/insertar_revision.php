
<?php

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
	


	$query = "INSERT INTO revisiones VALUES($codigo_revi, '$filtro', '$aceite', '$frenos', '$fecha_revi', '$matricula_auto','$detalle')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:revisiones.php");
	}else{
		Header("Location:agregar_revision.php?error=1");
	}

?>