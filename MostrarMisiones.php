<?php 
include('menu.php');
$mostrarMisiones=fopen("Misiones.txt","r");
while (!feof($mostrarMisiones)) {
	$mostrar=fgets($mostrarMisiones);

	echo $mostrar . "<br>";
}
fclose($mostrarMisiones);
 ?>