<?php
//CONEXION COMPROBAR
//require ("model/conexion.php");
//$con=conectar();
//echo"Conectado";
 require "../../controller/cliente/registrarC.php";
?>

<!DOCTYPE html>
<html>
<head>

	<title> Registro </title>
	<link rel="stylesheet" type="text/css" href="../../styles/css/registro.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="registro">
		<img class="avatar" src="../../styles/img/perfil2.jpg" alt="Logo de FAzt">
		<center><h3> Registro </h3></center>
		
		<form action="../../controller/cliente/registrarC.php" method="post">

			<!--NOMBRE-->
			<input type="text" name="nombre" placeholder="Ingresar Nombre">

			<!--DNI-->
			<input type="text" name="dni" placeholder="Ingresar DNI">

			<!--EMAIL-->
			<input type="text" name="email" placeholder="Ingresar Correo">

			<!--DIRECCION-->
			<input type="text" name="direc" placeholder="Ingresar Direccion">

			<!--CONTRASEÑA -->
			<input type="text" name="pass" placeholder="Ingresar contraseña">

			<input type="submit" name="btnregistrar" value="Ingresar" class="btn btn-danger">

			<p></p>
			
			<p><a href="../../index.php"> Iniciar sesion </a></p>
			<p><a href=""> Terminos y condiciones </a></p>
			



		</form>
	</div>
</body>
</html>