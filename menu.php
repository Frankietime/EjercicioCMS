<?php  		
	if(isset($_SESSION["login"])){
		if($_SESSION["login"] == "ok"){
?>
		
		<ul>
	        <li><a href="index.php">Inicio</a></li>
	        <li><a href="form-visitas.php">Libro de visitas</a></li>
	        <li><a href="panel-usuarios.php">Listado de Usuarios</a></li>
	        <li><a href="panel-productos.php">Listado de Productos</a></li>
	        <li><a href="panel-categorias.php">Listado de Categor&iacute;as</a></li>
	        <li><a href="form-contacto.php">Contacto</a></li>
	        <li><a href="logout.php">Desconectarse</a></li>
	   	</ul>
<?php
	;
		}
	} else {
?>		
		<ul>
	        <li><a href="index.php">Inicio</a></li>
			<li><a href="form-contacto.php">Contacto</a></li>
			<li><a href="form-login.php">Conectarse</a></li>
		</ul>
<?php
						
			} 
?>        	
