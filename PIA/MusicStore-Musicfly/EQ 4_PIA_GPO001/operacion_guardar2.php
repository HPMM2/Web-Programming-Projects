<?php
include("conexion.php");

$estado=$_POST["estado"];
$numero=$_POST["numero"];
$correo=$_POST["correo"];
$colonia=$_POST["colonia"];
$calle=$_POST["calle"];
$numeroc=$_POST["numeroc"];



//Insertar datos
$query="INSERT INTO Direccion(Estado,Telefono,Correo,Colonia,Calle,Numero) 
values ('$estado','$numero','$correo','$colonia','$calle','$numeroc')";

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