<?php 
date_default_timezone_set('America/Costa_Rica');
$fecha=date("d/m/Y");
$hora=date("g:i:s");

echo "Fecha: " . $fecha;
echo "<br>";
echo "Hora: " . $hora;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="EstiloMenu1.css">
</head>
<body id="Todo">
<form action="Login.php" method="GET" class="Login">
<div class="Grupo">
<h1>Ingrese Usuario</h1>
<input type="text" name="usuario" id="busqueda">
</div>
<div class="Grupo">
<h1>Ingrese contraseña</h1>
<input type="password" name="clave" id="busqueda">
</div>
<br>
<a href="menu.php" class="Aceptar">Aceptar</a>
</div>
</form>
</body>
</html>
