<?php 
include('menu.php');
$MostrarExtraterrestres=fopen("Alienigenas.txt","r");
while (!feof($MostrarExtraterrestres)) {
	$mostrar=fgets($MostrarExtraterrestres);
	echo $mostrar . "<br>";
}
fclose($MostrarExtraterrestres);
 ?>