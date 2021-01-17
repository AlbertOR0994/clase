<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tareas</title>
</head>
<body>
<!--Formulario para recoger la información introducida por el usuario -->
	<form action="Funcion.php" method="post">ID <!--relaciona la funcion externa del php -->
	<input type ="id" name = "id">tarea<!--ID que va a recoger del usuario -->
	<input type ="tarea" name ="tarea"><!--Tarea que va a recoger por el usuario-->
	<input type = "submit" name = "tarea"><!--boton para aceptar los datos-->
	<input type = "reset" value = "Borrar" name = "borrar"><!--boton para resetear datos-->
	<input type = "id" name = "borrar"><!--Boton para borrar la id elegida-->
	<input type = "submit" value = "Cambiar" name = "cambio"><!--Para cambiar una tarea segun la ID hacia la derecha-->
	<input type = "id" name = "camibo">
	</form>
<br>
<br>
	<table border = "5px">
		<tr><td>

		<h2>PENDIENTES</h2>
<?php
#Para abrir el fichero y imprimir todas las lineas escribimos un while y colocamos dentro la variable de fgets.
#Comprobará si hay alguna id repetida, si no escribirá la ID en caso de que se repita, la funcion php le dirá que esta repetida y esta volverá con el puntero al inicio, para colcocar una ID no repetida.
$fichero = fopen ("Pendientes.txt", "a+b");
$count = 1;
	while ( $lineaP = fgets ($fichero)){
 		list($id,$tarea) = explode(".", $lineaP);
 			if ($count == $id) {
 			$count++;
 			echo "$lineaP".PHP_EOL;
 			fseek($fichero,0);
 			}
	}

?>
</td></tr>
<tr> <td>
<!--Misma función que la anterior comentada sobre el fichero Enprogreso.-->
<h2>EN PROGRESO </h2>
	<form>
 
<?php
	$fichero = fopen("Enprogreso.txt", "rb");
		$count = 1;
		while ( $lineaE = fgets($fichero)) {
		list($id,$tarea) = explode(".", $lineaE);
 			if ($count == $id) {
 			$count++;
 			echo "$lineaE".PHP_EOL;
 			fseek($fichero,0);
 			}
	} 

?>

</td></tr>
<!--Misma funcion que el anterior.-->
<tr><td>
	<h2> FINALIZADAS</h2>
<?php

$fichero = fopen("Finalizadas.txt", "rb");
	$count=1;

while ( $lineaF = fgets($fichero)) {
		list($id,$tarea) = explode(".", $lineaF);
 			if ($count == $id) {
 			$count++;
 			echo "$lineaF".PHP_EOL;
 			fseek($fichero,0);
			}
	}
fclose($fichero);
?>
</td></tr>
</table>
</body>
</html>