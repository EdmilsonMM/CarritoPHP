<?php

require ("../../model/conexion.php")
	

	$nombre = $_POST['nombre'];
	$Dni = $_POST['dni'];
	$email = $_POST['email'];
	$direccion = $_POST['direc'];
	$Pass = $_POST['pass'];

		//Registrar
	if(isset($_POST["btnregistrar"]))
	{
		$sqlgrabar = "INSERT INTO cliente (Direccion,Dni,Email,Nombres,password) values ('$Direccion','$Dni','$email','$direccion','$Pass')";
		
		if(mysqli_query($con,$sqlgrabar))
		{
			echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='../../index.php' </script>";
		}else 
		{
			echo "Error: ".$sql."<br>".mysql_error($con);
		}
	}


?>