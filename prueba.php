<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
</head>
<body>


<?php include("conexion.php");

$conn=conectar();



?>


<div class="container mt-5">
    <div class="col-12">
 


        <div class="row">
                <div class="col-12 grid-margin">
                        <div class="card">
                                <div class="card-body">

                                        <h4 class="card-title">Buscador</h4>


                                        <form id="form2" name="form2" method="POST" action="prueba.php">
                                                <div class="col-12 row">
                                                        <div class="col-11">
                                                        <label  class="form-label">matricula_auto a buscar</label>
                                                        <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >     
                                                        </div>
                                                        <div class="col-1">
                                                                <input type="submit" class="btn btn-success" value="Ver" style="margin-top: 30px;">
                                                        </div>
                                                </div>

                                                <?php 
                                                $sql=pg_query("SELECT * FROM automovil WHERE matricula_auto LIKE '%".$_POST["buscar"]."%' OR fk_marca_nombre_marca LIKE '%".$_POST["buscar"]."%' OR estado LIKE '%".$_POST["buscar"]."%'    ");
                                                $numeroSql = pg_num_rows($sql);

                                                ?>
                                                <p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
                                        </form>


                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead>
                                                                <tr style="background-color: #00695c; color:#FFFFFF;">
                                                                        <th style=" text-align: center;"> matricula auto </th>
                                                                        <th style=" text-align: center;"> Precio </th>
                                                                        <th style=" text-align: center;"> Vin </th>
                                                                        <th style=" text-align: center;"> Color </th>
                                                                        <th style=" text-align: center;"> Modelo</th>
                                                                        <th style=" text-align: center;"> Nomre marca </th>
                                                                        <th style=" text-align: center;"> Estado </th>

                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php while ($rowSql = pg_fetch_assoc($sql)){ ?>
                                                
                                                                <tr>
                                                                <td style="text-align: center;"><?php echo $rowSql["matricula_auto"]; ?></td>
                                                                <td style=" text-align: center;"><?php echo $rowSql["precio_auto"]; ?></td>
                                                                <td style=" text-align: center;"><?php echo $rowSql["vin"]; ?></td>
                                                                <td style="text-align: center;"><?php echo $rowSql["color"]; ?></td>
                                                                <td style=" text-align: center;"><?php echo $rowSql["modelo"]; ?></td>
                                                                <td style="text-align: center;"><?php echo $rowSql["fk_marca_nombre_marca"]; ?></td>
                                                                <td style=" text-align: center;"><?php echo $rowSql["estado"]; ?></td>
                                                                </tr>
                                                
                                                <?php } ?>
                                                        </tbody>
                                                </table>
                                        </div>


                                </div>
                        </div>
                </div>
        </div>


    </div>
</div>

