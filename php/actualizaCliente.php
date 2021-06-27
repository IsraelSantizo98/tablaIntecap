<?php
    $contacto = $_POST['contacto'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $idCliente = $_POST['codigoCliente'];
    include 'conexion.php';
    $instruccion = "UPDATE clientes SET NombreContacto = '$contacto', Pais = '$pais', Telefono = '$telefono' WHERE IdCliente = '$idCliente'";
    $query = mysqli_query($conection, $instruccion);
    if ($query){
        header('location: ../modales/afirmativo.php');
    }else{
        header('location: ../modales/error.php');
    }
?>