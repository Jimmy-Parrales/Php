<?php 
include('menu.php');
$Extraterrestres=fopen("Alienigenas.txt","a");
fwrite($Extraterrestres,"************Alienigenas Registradas****************" . PHP_EOL);
fwrite($Extraterrestres,"Nombre:" . $_REQUEST['Nombre'].PHP_EOL);
fwrite($Extraterrestres,"ID:" . $_REQUEST['ID'].PHP_EOL);
fwrite($Extraterrestres,"Genero:" . $_REQUEST['Genero'].PHP_EOL);
fwrite($Extraterrestres,"Planeta:" . $_REQUEST['Planeta'].PHP_EOL);
fwrite($Extraterrestres,"Fechga:" . $_REQUEST['fecha'].PHP_EOL);
fwrite($Extraterrestres,"Salida:" . $_REQUEST['Salida'].PHP_EOL);
fwrite($Extraterrestres,"Motivo:" . $_REQUEST['Motivo'].PHP_EOL);
fwrite($Extraterrestres,"Extra:" . $_REQUEST['Extra'].PHP_EOL);
fwrite($Extraterrestres,"**********************************************" .PHP_EOL);
fclose($Extraterrestres);

echo "Datos registrados";
 ?>