<?php
include("conexion.php");

$numtarjeta=$_POST["numtarjeta"];
$vencimiento=$_POST["vencimiento"];
$cvv=$_POST["cvv"];
$banco=$_POST["banco"];



//Insertar datos
$query="INSERT INTO Pago(Numero,MesyAño,CVV,Banco) values ('$numtarjeta','$vencimiento','$cvv','$banco')";

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