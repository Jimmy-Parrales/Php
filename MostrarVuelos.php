<?php
include('menu.php');
$mostrarVuelos=fopen("Vuelos.txt","r");
while (!feof($mostrarVuelos)) {
	$mostrar=fgets($mostrarVuelos);
	echo $mostrar . "<br>";
}
fclose($mostrarVuelos);
 ?>