<?php 
date_default_timezone_set('America/Costa_Rica');
$fecha=date("d/m/Y");
$hora=date("g:i:s");
$aleatorio=rand(00000,59999);
include('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vuelos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="EstiloMenu1.css">
</head>
<body>
<form action="RegistroVuelos.php" method="GET">
Codigo Numerico del vuelo
<input type="text" name="codigo" value="<?php echo $aleatorio?>"  readonly="">
<br>
<br>
Linea Extraterrestre:
<input type="text" name="Aerolinea"  required="">
<br>
<br>
Cantidad de pasajeros:
<input type="number" name="Pasajeros"  required="">
<br><br>
Fecha de llegada del vuelo:
<input type="text" name="fecha" readonly="" value="<?php echo $fecha?>">
<br><br>
Hora de llegada del vuelo:
<input type="text" name="hora" readonly="" value="<?php echo $hora?>">
<br><br>
Viaje dentro de la galaxy:
<input type="radio" name="viaje" value="Si"  required="">Si
<input type="radio" name="viaje" value="No"  required="">No
<br>
<br>
<input type="submit" name="Aceptar" value="Aceptar"><input type="reset" name="Cancelar" value="Cancelar">
</form>
</body>
</html>