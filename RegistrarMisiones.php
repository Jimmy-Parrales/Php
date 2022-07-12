<?php 
include('menu.php');;
$peligro=$_REQUEST['Peligro'];

switch ($peligro) {
	case 'Baja':
		$bonificacion=$_REQUEST['Encargado'] . "-" . "$" . "20";
		break;
	case 'Media':
	    $bonificacion=$_REQUEST['Encargado'] . "-" . "$" . "50";
		break;
	case 'Alta':
		$bonificacion=$_REQUEST['Encargado'] . "-" . "$" . "100";
		break;
}

if($_REQUEST['importancia']=="Basica"){

$misiones=fopen("Misiones.txt","a");
fwrite($misiones,"************Misiones Registradas****************" . PHP_EOL);
fwrite($misiones,"Nombre de la mision:" . $_REQUEST['mision'] . PHP_EOL);
fwrite($misiones,"Codigo de la mision:" . $_REQUEST['codigo'] . PHP_EOL);
fwrite($misiones,"Encargado:" . $_REQUEST['Encargado'] . PHP_EOL);
fwrite($misiones,"Nivel de peligro:" . $_REQUEST['Peligro'] . PHP_EOL);
fwrite($misiones,"Importancia:" . $_REQUEST['importancia'] . PHP_EOL);
fwrite($misiones,"Descripcion:" . $_REQUEST['descripcion'] . PHP_EOL);
fwrite($misiones,"Bonificacion:" . $bonificacion . PHP_EOL);
fwrite($misiones,"**********************************************" .PHP_EOL);
fclose($misiones);
}elseif($_REQUEST['importancia']=="Urgente"){

$misiones=fopen("Misiones.txt","w");
fwrite($misiones,"************Misiones Registradas****************" . PHP_EOL);
fwrite($misiones,"Nombre de la mision:" . $_REQUEST['mision'] . PHP_EOL);
fwrite($misiones,"Codigo de la mision:" . $_REQUEST['codigo'] . PHP_EOL);
fwrite($misiones,"Encargado:" . $_REQUEST['Encargado'] . PHP_EOL);
fwrite($misiones,"Nivel de peligro:" . $_REQUEST['Peligro'] . PHP_EOL);
fwrite($misiones,"Importancia:" . $_REQUEST['importancia'] . PHP_EOL);
fwrite($misiones,"Descripcion:" . $_REQUEST['descripcion'] . PHP_EOL);
fwrite($misiones,"Bonificacion:" . $bonificacion . PHP_EOL);
fwrite($misiones,"**********************************************" .PHP_EOL);
fclose($misiones);
}
echo "Datos registrados";
 ?>