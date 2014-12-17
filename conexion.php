<?php

//Uso este codigo en todos los archivos de mi sitio que se conecten al server
	
	$server = "localhost";
	$usuario = "root";
	$clave = "";
	$base = "catalogo2";
	$link = mysqli_connect($server, $usuario, $clave, $base);
	mysqli_set_charset($link, "utf8");

?>