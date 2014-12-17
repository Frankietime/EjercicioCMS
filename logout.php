<?php
	$titulo = "Saliendo de sistema";
	session_start();
	
	session_unset(); //Para versiones viejas de php
	 
	session_destroy();
	
	//Redirección luego de 3 segundos
	header("refresh:3; url=index.php");//OJO con el ';' en el refresh
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
		<p>Vuelva pronto!</p>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>