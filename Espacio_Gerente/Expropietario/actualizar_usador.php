<?php 

	include("conexion.php");
	$conn = conectar();

	$cedula_usa = $_GET['cedula_usa'];

	$query = "SELECT * FROM usador WHERE cedula_usa = '$cedula_usa'";
	$consulta = pg_query($conn, $query);
	$row = pg_fetch_array($consulta)

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">

</head>
<body>

<title>Expropietario</title>

<div class="sidebar">
<a href="../home.php?"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
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
				<h1>Actualizando Expropietario: </h1>
				<div>
				<a href="usador.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "actUsador.php" method = "POST">
                        <input type="hidden" name="cedula_usa" value = "<?php echo $row['cedula_usa'] ?>">
                        <br><br>
                        <input type="text" name="nombre_usa" placeholder="Nombre" value = "<?php echo $row['nombre_usa'] ?>">
                        <br><br>
                        <input type="text" name="telefono_usa" placeholder="Telefono" value = "<?php echo $row['telefono_usa'] ?>">
                        <br><br>

                        <button type="submit">Actualizar</button>

					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 