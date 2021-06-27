<?php
    //Se captura el valor del id en una variable
    $idCliente = $_GET['codCLiente'];
    include 'conexion.php';
    //Instruccion para eliminar un registro
    $instruccion = "DELETE FROM clientes WHERE IdCliente = '$idCliente'";
    mysqli_query($conection, $instruccion);
?>