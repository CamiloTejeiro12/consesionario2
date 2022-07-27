<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'conexion.php';

$conn=conectar();

session_start();
$usuario=$_POST['user'];
$clave=$_POST['pass'];

$query="SELECT * from usuarios WHERE usuario='$usuario' AND contraseña='$clave'";
$consulta=pg_query($conn,$query);
$cantidad=pg_num_rows($consulta);

if (pg_num_rows($consulta) > 0) {
    $_SESSION['nombre_usuario']=$usuario;
    header("location: home.php");
}else{
    echo "Se equivocó socio";
}


?>