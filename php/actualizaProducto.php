<?php
    $nombreProducto = $_POST['nombreProducto'];
    $cantidadUnidad = $_POST['cantidadUnidad'];
    $precioUnidad = $_POST['precioUnidad'];
    $existencias = $_POST['existencias'];
    $IdProducto = $_POST['codigoProducto'];
    include 'conexion.php';
    $instruccion = "UPDATE productos SET NombreProducto = '$nombreProducto', CantidadPorUnidad = '$cantidadUnidad', PrecioUnidad = '$precioUnidad', UnidadesEnExistencia = '$existencias' WHERE IdProducto = '$IdProducto'";
    mysqli_query($conection, $instruccion);
?>