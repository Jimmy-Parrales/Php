<?php 
$nombre=$_REQUEST['nombre'];
$cedula=$_REQUEST['cedula'];
$genero=$_REQUEST['genero'];
$edad=$_REQUEST['edad'];
$nacimiento=$_REQUEST['nacimiento'];
$domicilio=$_REQUEST['domicilio'];
$fecha=$_REQUEST['fecha'];
$jugador=$_REQUEST['jugador'];

if (isset($_REQUEST['aceptar'])) {

$conexion=mysqli_connect("localhost","root","","surfup");

if(!$conexion){
echo "Error en la conexion";
}

mysqli_set_charset($conexion,"utf8");

$consulta="INSERT INTO participante(Nombre,Cedula,Genero,Edad,Nacimiento,Lugar_domicilio,Fecha_Registro,Tipo_jugador)VALUES('$nombre',$cedula,'$genero',$edad,'$nacimiento','$domicilio','$fecha','$jugador')";

mysqli_query($conexion,$consulta);

echo mysqli_error($conexion);

mysqli_close($conexion);
}



 ?>