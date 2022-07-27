
<?php

include("conexion.php");

$conn=conectar();

session_start();

	$matricula_auto_re = $_POST['matricula_auto_re'];
	$cod_repara_re = $_POST['cod_repara_re'];
	$fecha_repa = $_POST['fecha_repa'];
	


	$query = "INSERT INTO repara VALUES('$matricula_auto_re', $cod_repara_re, '$fecha_repa')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:repara.php");
	}else{
		Header("Location:agregar_repara.php?error=1");
	}

?>