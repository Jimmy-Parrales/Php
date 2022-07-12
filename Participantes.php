
<?php  
date_default_timezone_set('America/Costa_Rica');
$fecha=date("j/n/y");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Participantes</title>
</head>
<body>
<form action="registrarParticipantes.php" method="POST">
Ingrese Nombre:<input type="text" name="nombre" required="">
<br><br>
Ingrese Cedula:<input type="number" name="cedula" required="">
<br><br>
Seleccione Genero:
<select name="genero" required="">
	<option>Seleccione Sexo</option>
	<option value="Femenino">Femenino</option>
	<option value="Masculino">Masculino</option>
</select>
<br><br>
Ingrese Edad:<input type="number" name="edad" required="">
<br><br>
fecha de nacimiento:<input type="date" name="nacimiento" required="">
<br><br>
Lugar de domicilio:<input type="text" name="domicilio" required="">
<br><br>
fecha de registro:<input type="text" name="fecha" value="<?php echo $fecha  ?>" readOnly="">
<br><br>
Tipo de jugador:<select name="jugador" required="">
	<option>Seleccione tipo</option>
	<option value="Novato">Novato</option>
	<option value="Experimentado">Experimentado</option>
</select>
<br><br>

<input type="submit" name="aceptar" value="Registrar"> <input type="reset" name="reset" value="Limpiar">
</form>
</body>
</html>
