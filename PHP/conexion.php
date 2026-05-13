<?php
$host="localhost";
$usuario="id17951972_alejandroro02";
$pass="o0K/GO^<5tH<Yd0Q";
$nomdb="id17951972_prowebpia";

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