
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();


	$codigo_vende = $_POST['codigo_vende'];
	$nombre_vende = $_POST['nombre_vende'];
	$telefono_vende = $_POST['telefono_vende'];

	$query = "INSERT INTO vendedor VALUES($codigo_vende, '$nombre_vende', $telefono_vende)";
	$consulta = pg_query($conn, $query);

	$user_vendedor = "INSERT INTO usuarios_vendedor VALUES('$codigo_vende','unillanos')";
	$consulta = pg_query($conn, $user_vendedor);

	if($consulta){
		Header("Location:vendedores.php");
	}else{
		Header("Location:agregar_vendedor.php?error=1");
	}

?>