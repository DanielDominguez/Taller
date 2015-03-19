<?php

//datos para conectar

$host="localhost";
$user="root";
$password="";
$db="mensajes";
//se crea una variable conexion//
$con=mysqli_connect($host,$user,$password)or die("problemas al conectar");

mysqli_select_db($con,$db)or die("problemas al seleccionar la base de datos");
?>