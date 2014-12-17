<?php

	session_start();
	
	unset($_SESSION["nombre"]);//Borra una variable de sesion
	
	session_unset();//Borra todas las variables de sesion
	
	session_destroy();//Elimina el archivo de sesion
?>