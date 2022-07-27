<?php 

	include("conexion.php");
	$conn = conectar();

	$gerente = $_GET['gerente'];

	$query = "SELECT * FROM usuarios_gerente WHERE gerente = '$gerente'";
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

<title>Usuario</title>

<div class="sidebar">
<a href="../home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="../Expropietario/usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="../Compras/compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="../Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="../Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
  <a href="usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>

<center> 
<div class="main" class="container" style="background-color:#f1f1f1">
<table>

		<th style = "width: 500px">
				<h1>Actualizando Usuario Gerente: </h1>
				<div>
				<a href="usuarios.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "actUser_gerente.php" method = "POST">
                        <input type="text" name="gerente" value = "<?php echo $row['gerente'] ?>"readonly>
                        <br><br>
                        <input type="text" name="contraseña" placeholder="Contraseña" value = "<?php echo $row['contraseña'] ?>">
                        <br><br>

                        <button type="submit">Actualizar</button>

					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 