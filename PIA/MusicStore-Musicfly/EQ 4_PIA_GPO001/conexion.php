<?php
$host="localhost";
$usuario="id19223716_datos";
$pass="H&Vmd78D6CPvJ4!AUfsu";
$nomdb="id19223716_datosdecompra";

$conexion=new mysqli($host,$usuario,$pass,$nomdb);

	if($conexion){

	echo"conexion exitosa";
	#code...
}
	else{
	echo"No se realizo la conexion a la base de datos";
	#code...
	}
?>