<?php
//CONEXION COMPROBAR
//require ("model/conexion.php");
//$con=conectar();
//echo"Conectado";

require "controller/cliente/loginC.php";

?>

<!DOCTYPE html>
<html>
<head>

	<title> Inicio de sesion </title>
	<link rel="stylesheet" type="text/css" href="styles/css/login.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="login">
		<img class="avatar" src="styles/img/perfil1.jpg" alt="Logo de FAzt">
		<center><h3> Inicio de sesion </h3></center>
		
		<form action="controller/cliente/loginC.php" method="post">
			<!--DNI-->
			<input type="text" name="dni" placeholder="Ingresar DNI">
			<!--CONTRASEÑA -->
			<input type="password" name="pass" placeholder="Ingresar contraseña">

			<input type="submit" name="btningresar" value="Ingresar" class="btn btn-danger">

			<p></p>
			
			<p><a href=""> Olvidaste tu contraseña ?</a></p>
			<p><a href="view/cliente/registro.php"> No tienes cuenta ? Registrate</a></p>


		</form>
	</div>
</body>
</html>