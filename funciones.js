function confirmarBaja(){
	var mensaje = 'Si pulsa el boton "Aceptar", se eliminara el producto elegido';
	if (confirm(mensaje)){
		return true; //return interrumpe ejecución
	}
	//redireccion a panel-productos
	window.location='panel-productos.php';
	return false;
}
