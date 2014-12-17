<?php

	//Directiva de sesión
	session_start();
	
	//Ahora cada vez que se prosiga navegando se navegara usando este archivo, no se generará uno nuevo
	
	//Escribimos variables de sesión
	$_SESSION["nombre"] = "franco";
	$_SESSION["numero"] = 78;
	
?>