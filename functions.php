<?php

#archivo para escribir todas las funciones y poder llamarlas


#limpiamos datos de los formularios
function limpiarDatos($datos){
	// Eliminamos los espacios en blanco al inicio y final de la cadena
	$datos = trim($datos);

	// Quitamos las barras / escapandolas con comillas
	$datos = stripslashes($datos);

	// Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
	$datos = htmlspecialchars($datos);
	return $datos;
}

?>
