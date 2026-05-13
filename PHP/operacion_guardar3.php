<?php
include("conexion.php");

$instrumento=$_POST["instrumento"];
$modelo=$_POST["modelo"];
$color=$_POST["color"];



//Insertar datos
$query="INSERT INTO Producto(Instrumento,Modelo,Color) values ('$instrumento','$modelo','$color')";

//VERIFICAR SI SE EJECUTO

$resultado=$conexion->query($query);
if ($resultado) {
	echo"Datos insertados correctamente";
	# code...
}
else{
	echo"No se insertaron los datos";
}

?>