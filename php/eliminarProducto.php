<?php
    //Se captura el valor del id en una variable
    $idProducto = $_GET['codProducto'];
    include 'conexion.php';
    //Instruccion para eliminar un registro
    $instruccion = "DELETE FROM productos WHERE IdProducto = '$idProducto'";
    mysqli_query($conection, $instruccion);
?>