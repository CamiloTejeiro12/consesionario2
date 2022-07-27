<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); 
$sesion = $_SESSION['cliente'];

if($sesion == null || $sesion == ''){
    session_destroy();
    header("Location: ../index.php");
}

include("conexion.php");

$conn=conectar();


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="https://kit.fontawesome.com/a076d05399.js" ></script>

<title>Home</title>

</head>
<body>
<div class="sidebar">
<a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>

</div>

<div align="right">
<a href="cierre.php"><button type="button" class="cancelbtn">Cerrar Sesion</button></a>
</div>
  
<div class="main" class="container" style="background-color:#f1f1f1">
 

  <h2>¡Bienvenido Cliente!</h2>

  <table style="background-color:#f1f1f1">

  <tr style="background-color:#F0FF00">
  <h2>Top vendedor</h2>
							<th><h3>Vendedor</h3></th>
							<th><h3>Ventas</h3></th>
						</tr>

  <?php

  $busqueda = "select * from top_vendedor;";
  $consulta = pg_query($conn, $busqueda);

  while($row = pg_fetch_array($consulta)){

  ?>
  <tr>
    <th><a href="Vendedores/vendedores.php"><input type="text" value = "<?php echo $row['nombre_vende'] ?>" readonly></th>
    <th><a href="Ventas/ventas.php"><input type="text" value = "<?php echo $row['contador'] ?>"readonly></th>

  </tr>
  
  <?php 
    }
   ?>

    </table>
    <table >

    <tr align="right">
   <h2>Marca Popular</h2>
    </tr>
							<th style="background-color:#F0FF00"><h5>Marca</h5></th>
							<th style="background-color:#F0FF00"><h5>Cantidad</h5></th>
							
						</tr>
  </div>
  <?php

  $busqueda = "select * from marca_popular;";
  $consulta = pg_query($conn, $busqueda);

  while($row = pg_fetch_array($consulta)){
  ?>
  <tr>
    <th><a href="../Marcas/marcas.php"><input type="text" value = "<?php echo $row['nombre_marca'] ?>" readonly></th></a>
    <th><input type="text" value = "<?php echo $row['contador'] ?>"readonly></th>

  </tr>
  
  <?php 
    }
   ?>


  </table>





  </table>
</div>
</div>


   
</body>
</html> 
