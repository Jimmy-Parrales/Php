<?php 
include('menu.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Misiones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="EstiloMenu1.css">
</head>
<body>
<form action="RegistrarMisiones.php" method="GET" class="misiones">

Nombre de la mision:
<input type="text" name="mision" required="">

<br><br>

Codigo de la mision:
<input type="number" name="codigo"  required="">

<br><br>

Agente encargado:
<select name="Encargado"  required="">
	<option>Seleccione encargado</option>
	<option value="A1">A 1</option>
	<option value="A2">A 2</option>
	<option value="A3">A 3</option>
	<option value="A4">A 4</option>
	<option value="A5">A 5</option>
</select>

<br><br>

nivel de peligrosidad:
<select name="Peligro"  required="">
	<option>Seleccione nivel de peligrosidad</option>
	<option value="Baja">Baja</option>
	<option value="Media">Media</option>
	<option value="Alta">Alta</option>
</select>

<br><br>

Nivel de importancia:
<input type="radio" name="importancia" value="Basica"  required="">Basica
<input type="radio" name="importancia" value="Urgente"  required="">Urgente

<br><br>

Descripcion
<textarea name="descripcion"  required=""></textarea>

<br><br>

<input type="submit" name="Aceptar" value="Aceptar"><input type="reset" name="Cancelar" value="Cancelar">

</form>
</body>
</html>