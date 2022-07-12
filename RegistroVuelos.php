<?php 
include('menu.php');
$vuelos=fopen("Vuelos.txt","a");
fwrite($vuelos,"************vuelos Registrados****************" . PHP_EOL);
fwrite($vuelos,"Codigo del vuelo:".$_REQUEST['codigo'] . PHP_EOL);
fwrite($vuelos,"Aerolinea:".$_REQUEST['Aerolinea'] . PHP_EOL);
fwrite($vuelos,"Cantidad Pasajeros:".$_REQUEST['Pasajeros'] . PHP_EOL);
fwrite($vuelos,"fecha de llegada del vuelo:".$_REQUEST['fecha'] . PHP_EOL);
fwrite($vuelos,"hora de llegada de vuelo:".$_REQUEST['hora'] . PHP_EOL);
fwrite($vuelos,"viaje al centro del universo:".$_REQUEST['viaje'] . PHP_EOL);
fwrite($vuelos,"**********************************************" .PHP_EOL);
fclose($vuelos);
echo "Datos registrados";
 ?>