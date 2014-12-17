<?php
	
	$usu_login = $_POST["usu_login"];
	$usu_clave = $_POST["usu_clave"];
	
	require "conexion.php";
	
	$sql = "SELECT 
					usu_nombre
			FROM 
					usuarios
				WHERE
						usu_login='".$usu_login."'	
					AND
						usu_clave='".$usu_clave."'";
	
	$resultado = mysqli_query($link, $sql);
	
	$cantidad = mysqli_num_rows($resultado);
	$show = $cantidad;
	echo $show;
	
	//Redirección a formulario con mensaje de error
	if($cantidad != 1){
		header("Location: form-login.php?login=0");
		
	} else {
		//Rutina de autenticación
		session_start();
		$_SESSION["login"] = "ok";
		
		//Redirección para ingresar a sistema
		header("location: panel-productos.php");
	}
?>