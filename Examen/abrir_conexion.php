<?php
//Parametros a configurar para la conexión de la base de datos
$host = "localhost"; //Sera el valor de nuestra BD
$basededatos = "examen"; //Sera el valor de nuestra BD
$usuariodb = "allan"; //Sera el valor de nuestra BD
$clavedb = "12345"; //Sera el valor de nuestra BD

//Lista de tablas
$tabla_db1 = "exa"; //Tabla de usuarios

error_reporting(0); //No me muestra errores

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

if($conexion->connect_errno){
echo "Nuestro sitio experimenta fallos.....";
echo "Los datos se insertaron correctamente";	
exit();
}


?>