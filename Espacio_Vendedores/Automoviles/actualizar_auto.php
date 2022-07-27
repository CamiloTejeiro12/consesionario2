<?php 

	include("conexion.php");
	$conn = conectar();

	$matricula_auto = $_GET['matricula_auto'];

	$query = "SELECT * FROM automovil WHERE matricula_auto = '$matricula_auto'";
	$consulta = pg_query($conn, $query);
	$row = pg_fetch_array($consulta);

  $error = $_GET['error'];

  if ($error == "1") {
    echo '<script language = "javascript">alert("Datos incorrectos");</script>';
  
  }


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<title>Automoviles</title>

<div class="sidebar">
<a href="../home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="../Expropietario/usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="../Compras/compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="../Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="../Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
  <a href="../Usuarios/usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>

<center> 
<div class="main" class="container" style="background-color:#f1f1f1">
<table>

		<th style = "width: 500px">
				<h1>Actualizando Automovil: </h1>
				<div>
				<a href="automoviles.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "actAuto.php" method = "POST">
                        <input type="hidden" name="matricula_auto" value = "<?php echo $row['matricula_auto'] ?>">
                        <br><br>
                        <input type="text" name="precio_auto" placeholder="Precio" value = "<?php echo $row['precio_auto'] ?>">
                        <br><br>
                        <input type="text" name="vin" placeholder="VIN" value = "<?php echo $row['vin'] ?>">
                        <br><br>
                        <input type="text" name="color" placeholder="Color" value = "<?php echo $row['color'] ?>">
                        <br><br>
                        <input type="text" name="modelo" placeholder="Modelo" value = "<?php echo $row['modelo'] ?>">
                        <br><br>
                        <input type="text" name="nombre_marca" placeholder="Marca" value = "<?php echo $row['fk_marca_nombre_marca'] ?>">
                        <br><br>
                        <input type="text" name="estado" placeholder="Estado" value = "<?php echo $row['estado'] ?>">
                        <br><br>

                        <button type="submit">Actualizar</button>

					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 