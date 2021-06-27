<?php
include 'php/conexion.php';

$nombreCategoria=$_POST['nombreCategoria'];
$descripcion=$_POST['descripcion'];
$ubicacion=$_POST['ubicacion'];

$instruccion="INSERT INTO categoria (IdCategoria, NombreCategoria, Descripcion, ubicacion) VALUES(NULL, '$nombreCategoria', '$descripcion', '$ubicacion')";
mysqli_query($conection, $instruccion);
?>