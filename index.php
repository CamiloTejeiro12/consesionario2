<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Consesionario</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href=" ">
</head>
<body>

<?php

$error = $_GET['error'];

if ($error == "1") {
	echo '<script language = "javascript">alert("Datos incorrectos");</script>';
}

?>


<h2 align="center">Login</h2>


<form action="sesion.php" method="post">
  <div class="imgcontainer">
    <img src="https://www.nicepng.com/png/detail/115-1150821_default-avatar-comments-sign-in-icon-png.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Recuerdame
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  <a href="index.php"><button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>





</body>
</html>


