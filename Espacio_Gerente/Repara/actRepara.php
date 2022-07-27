<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

	$matricula_auto_re = $_POST['matricula_auto_re'];
	$cod_repara_re = $_POST['cod_repara_re'];
	$fecha_repa = $_POST['fecha_repa'];
	


	$query = "UPDATE repara SET cod_repara_re = $cod_repara_re, fecha_repa = '$fecha_repa' WHERE matricula_auto_re = '$matricula_auto_re'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:repara.php");
	}else{
		Header("Location:actualizar_repara.php?error=1");
	}

?>