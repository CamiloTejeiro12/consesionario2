<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'conexion.php';

$conn=conectar();

session_start();
$usuario=$_POST['user'];
$clave=$_POST['pass'];

$cliente = pg_query("SELECT * FROM usuarios_cliente WHERE cliente = '$usuario' AND contraseña = '$clave'");
$vendedor = pg_query("SELECT * FROM usuarios_vendedor WHERE vendedor = '$usuario' AND contraseña = '$clave'");
$gerente = pg_query("SELECT * FROM usuarios_gerente WHERE gerente = '$usuario' AND contraseña = '$clave'");

/* Ahora comprobamos que variable contiene al usuario*/
if(pg_num_rows($cliente) > 0) 
{
    /* Si entra en este if significa que el que intenta acceder es un cliente, 
    por lo tanto le creamos una sesión */
    session_start();
 
    $_SESSION['cliente']="$usuario";
 
    /* Nos dirigimos al espacio de los clientes usando header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: Espacio_Clientes/home.php");
 
    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
    seguir ejecutando código de este archivo */
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es un vendedor */
else if(pg_num_rows($vendedor) > 0) 
{
    session_start();
    $_SESSION['vendedor']="$usuario";
    header("Location: Espacio_Vendedores/home.php");
    exit(); 
}
 
//comprobamos si es un gerente el que intenta abrir la sesión
else if(pg_num_rows($gerente) > 0) 
{
    session_start();
    $_SESSION['gerente']="$usuario";
    header("Location: Espacio_Gerente/home.php");
    exit();
} 
else 
{
   /* Si el usuario no se encuentra en ninguna de las tres tablas */
   header("Location: index.php?error=1");
}


?>