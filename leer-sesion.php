<?php
	
	//Pedimos, como usuario logeado, informacion al servidor
	session_start();//uso mi sesion
	$nombre = $_SESSION["nombre"];//pido informacion
	$numero = $_SESSION["numero"];
	
	echo $nombre;//muestro informacion
	echo $numero;
?>