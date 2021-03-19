<?php

require ("../../model/conexion.php");

	$Dni = $_POST['dni'];
	$Pass = $_POST['pass'];

	//Login
	if(isset($_POST["btningresar"]))
	{
		$query = mysqli_query($con,"SELECT * FROM cliente WHERE dni = '$Dni' AND password='$Pass'");
		$nr = mysqli_num_rows($query);
		
		if($nr==1)
		{
			echo "<script> alert('BIENVENIDO'); window.location='../../view/interfaz/menu.php' </script>";
		}else
		{
			echo "<script> alert('Usuario no existe'); window.location='../../index.php' </script>";
		}
	}


?>