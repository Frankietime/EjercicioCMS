<?php
	include "validar.php";
	$titulo = "Panel de Control - Agregar Categorías";
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
		<div id="panel">
			<br />
			<form action="alta-cat.php" method="post">
				Ingrese una nueva categoría
				<input type="text" id="cat_nombre" name="cat_nombre" />
				<input type="submit" value="Agregar categoría" />
			</div>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>