<?php

	function conectar()
	{
		$user = "root";
		$pass = "";
		$server = "localhost";
		$base = "carritocompras";
		$con=mysqli_connect($server,$user,$pass,$base) or die ("Error al conectar a la bd ");
		

		return $con;
	}
?>