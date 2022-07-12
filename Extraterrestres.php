<?php 
date_default_timezone_set('America/Costa_Rica');
$fecha=date("d/m/Y");
include('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Regsitro de extraterrestres</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="EstiloMenu1.css">
</head>
<body>
<form action="RegistroExtraterrestres.php" method="GET" name="Formulario">
	Ingrese nombre:
	<input type="text" name="Nombre"  required="">
	<br>
	<br>
	Ingrese ID:
	<input type="number" name="ID"  required="">
	<br>
	<br>
	Ingrese genero:
	<select name="Genero"  required="">
		<option>Seleccione Genero</option>
		<option value="Femenino">Femenino</option>
		<option value="Masculino">Masculino</option>
		<option value="Otro">Otro</option>
	</select>
	<br>
	<br>
	Planeta de Origen:
	<input type="text" name="Planeta"  required="">
	<br>
	<br>
	Fecha de ingreso:
	<input type="text" name="fecha" value="<?php echo $fecha?>" readonly="">
	<br>
	<br>
	Fecha de salida:
	<input type="date" name="Salida"  required="">
	<br>
	<br>
	Motivo de la visita:
	<br>
	<textarea name="Motivo"  required="">
	</textarea>
	<br>
	<br>
	Trae alguna extra:
	<select name="Extra"  required="">
		<option>Selecione una extra</option>
		<option value="Planta">Planta</option>
		<option value="Comida">Comida</option>
		<option value="Otro">Otro</option>
	</select>
	<br>
	<br>
	<input type="submit" name="Enviar" value="Registrar"><input type="reset" name="Cancelar" value="Cancelar">
</form>
</body>
</html>