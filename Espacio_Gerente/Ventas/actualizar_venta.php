<?php 

	include("conexion.php");
	$conn = conectar();

	$codigo_venta = $_GET['codigo_venta'];

	$query = "SELECT * FROM venta WHERE codigo_venta = '$codigo_venta'";
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
<script src="https://kit.fontawesome.com/a076d05399.js" ></script>
</head>
<body>

<title>Venta</title>

<div class="sidebar">
<a href="../home.php?"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
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
				<h1>Actualizando venta: </h1>
			
				<a href="ventas.php"><button type="button" class="cancelbtn">Regresar</button></a>
				

					<form action = "actVenta.php" method = "POST">

                        <input type="hidden" name="codigo_venta" value = "<?php echo $row['codigo_venta'] ?>">
                        <br><br>
                        <input type="date" name="fecha_venta" placeholder="Fecha de Venta" value = "<?php echo $row['fecha_venta'] ?>">
                        <br><br>
                        <input type="number" name="precio_venta" placeholder="Precio de Venta" value = "<?php echo $row['precio_venta'] ?>">
                        <br><br>
                        <input type="number" name="cedula_cli" placeholder="Cedula Cliente" value = "<?php echo $row['fk_cliente_cedula_cli'] ?>">
                        <br><br>
                        <input type="number" name="codigo_vende" placeholder="Codigo Vendedor" value = "<?php echo $row['fk_vendedor_codigo_vende'] ?>">
                        <br><br>
                        <input type="text" name="matricula_auto" placeholder="Matricula Auto" value = "<?php echo $row['fk_automovil_matricula_auto'] ?>">
                        <br><br>

                        <button type="submit">Actualizar</button>

					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 