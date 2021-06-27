<?php
include 'php/conexion.php';

$nombreCompania=$_POST['nombreCompania'];
$nombreContacto=$_POST['nombreContacto'];
$cargoContacto=$_POST['cargoContacto'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$region=$_POST['region'];
$codPostal=$_POST['codPostal'];
$pais=$_POST['pais'];
$telefono=$_POST['telefono'];
$fax=$_POST['fax'];
$paginaPrincipal=$_POST['paginaPrincipal'];

$instruccion="INSERT INTO proveedores (IdProveedor, NombreCompania, NombreContacto, CargoContacto, Direccion, Ciudad, Region, CodPostal, Pais, Telefono, Fax, PaginaPrincipal) VALUES(NULL, '$nombreCompania', '$nombreContacto', '$cargoContacto', '$direccion', '$ciudad', '$region', '$codPostal', '$pais', '$telefono', '$fax', '$paginaPrincipal')";
mysqli_query($conection, $instruccion);
?>