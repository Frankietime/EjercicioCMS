<?php

	session_start();
	if(!isset($_SESSION["login"])){ //NOT IS SET (EN PHP SE PUEDE NEGAR CUALQUIER COSA)
		header("location: form-login.php?login=2");
	}

?>