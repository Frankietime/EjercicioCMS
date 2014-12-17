<?php
	
	$titulo = "Enviando mail";
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$consulta = $_POST["consulta"];
	
	//Configuramos datos de e-mail a enviar
	$destinatario = "donadiofranco7@gmail.com";
	$asunto = "E-mail enviado desde EducaciónIT Aula 806";
	$cuerpo = "<div style=\"background-color:#ace2fa; width:550px; padding:15px; margin:auto; border:1px solid #008\">";   // esta línea genera un div para dar formato
		 
	$cuerpo .= "Nombre: ".$nombre."<br>
	E-mail: ".$email."<br>
	Consulta: ".$consulta;
	
	$cuerpo .= "</div>";	

	//Enviamos el e-mail (TIENE QUE HABER UN SERVIDOR SMTP)
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";  // los headers son necesarios para dar formato html
	mail($destinatario, $asunto, $cuerpo, $headers); //envia con formato html
	

?>

<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<!-- inicio del desarrollo -->
		<?php
		
			//Personalizamos mensaje en pantalla
			echo "Gracias ".$nombre." por contactarnos";
		
		?>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>