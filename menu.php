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
	<title>Menu principal</title>
	<link rel="stylesheet" type="text/css" href="EstiloMenu1.css">
</head>
<body>
<header>
	<nav class="Navegacion">
		<ul class="menu">
			<li><a href="menu.php">Inicio</a></li>
			<li><a href="">Extraterrestres</a>
				<ul class="Submenu">
					<li><a href="Extraterrestres.php">Agregar</a></li>
					<li><a href="MostrarExtraterrestres.php">Mostrar</a></li>
				</ul>
			</li>
			<li><a href="">Vuelos</a>
				<ul class="Submenu">
					<li><a href="Vuelos.php">Agregar</a></li>
					<li><a href="MostrarVuelos.php">Mostrar</a></li>
				</ul>
			</li>

			<li><a href="">Misiones</a>
				<ul class="Submenu">
					<li><a href="Misiones.php">Agregar</a></li>
					<li><a href="MostrarMisiones.php">Mostrar</a></li>
				</ul>
			</li>
			<li><a href="acercade.php">A cerca de...</a></li>
			<li><a href="Login.php">Salir</a></li>
		</ul>
	</nav>
</header>
</div>
</body>
</html>