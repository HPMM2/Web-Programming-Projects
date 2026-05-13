<?php
include("conexion.php");

$nombre= $_POST['nombre'];



//Insertar datos
$query="INSERT INTO Nombre(Nombre) values('$nombre')";

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