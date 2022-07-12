<?php 

$conexion=mysqli_connect("localhost","root","","surfup");

if(!$conexion){
echo "Erro de conexion";
}

mysqli_set_charset($conexion,"utf8");

$consulta="SELECT * FROM participante";

$resultado=mysqli_query($conexion,$consulta);

echo "<table border='2'>";
	echo "<tr>";
	echo "<th>";echo "Nombre:";echo "</th>";
	echo "<th>";echo "Cedula:";echo "</th>";
	echo "<th>";echo "Genero:";echo "</th>";
	echo "<th>";echo "Edad:";echo "</th>";
	echo "<th>";echo "Nacimiento:";echo "</th>";
	echo "<th>";echo "Lugar de domicilio:";echo "</th>";
	echo "<th>";echo "Fecha de registro:";echo "</th>";
	echo "<th>";echo "Tipo Jugador:";echo "</th>";
	echo "<th>";echo "Acciones a realizar:";echo "</th>";
	echo "</tr>";

while ($busqueda=mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {

	echo "<tr>";echo "<th>";echo "" . $busqueda['Nombre'];echo "</th>";;
	echo "<th>";echo "" . $busqueda['Cedula'];echo "</th>";
	echo "<th>";echo "" . $busqueda['Genero'];echo "</th>";
	echo "<th>";echo "" . $busqueda['Edad'];echo "</th>";
	echo "<th>";echo "" . $busqueda['Nacimiento'];echo "</th>";
	echo "<th>";echo "" . $busqueda['Lugar_domicilio'];echo "</th>";
	echo "<th>";echo "" . $busqueda['Fecha_Registro'];echo "</th>";
	echo "<th>";echo "" . $busqueda['Tipo_jugador'];echo "</th>";
	echo "<th>";echo "<a href='' name='Actualizar'>Actualizar</a>";
	echo "<br>";
	echo "<a href=''?$busqueda'>Eliminar</a>";echo "</th>";
	echo "</tr>";
}

 ?>