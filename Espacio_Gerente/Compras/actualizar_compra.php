<?php 

	include("conexion.php");
	$conn = conectar();

	$codigo_compra = $_GET['codigo_compra'];

	$query = "SELECT * FROM compra WHERE codigo_compra = '$codigo_compra'";
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

</head>
<body>

<title>Compra</title>

<div class="sidebar">
<a href="../home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="../Expropietario/usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="../Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="../Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
  <a href="../Usuarios/usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>

<center>

<div class="main" class="container" style="background-color:#f1f1f1">
<table>
		<th style = "width: 500px">
				<h1>Actualizando Compra: </h1>
				<div>
				<a href="compras.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "actCompra.php" method = "POST">
                        <input type="hidden" name="codigo_compra" value = "<?php echo $row['codigo_compra'] ?>">
                        <br><br>
                        <input type="date" name="fecha_de_compra" placeholder="Fecha" value = "<?php echo $row['fecha_de_compra'] ?>">
                        <br><br>
                        <input type="number" name="precio_compra" placeholder="Precio compra" value = "<?php echo $row['precio_compra'] ?>">
                        <br><br>
                        <input type="number" name="cedula_usa" placeholder="Cedula expropietario" value = "<?php echo $row['fk_usador_cedula_usa'] ?>">
                        <br><br>
                        <input type="text" name="matricula_auto" placeholder="Matricula del auto" value = "<?php echo $row['fk_automovil_matricula_auto'] ?>">
                        <br><br>

                        <button type="submit">Actualizar</button>

					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 