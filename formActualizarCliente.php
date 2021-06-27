<?php
    include 'php/conexion.php';
    $idCliente = $_GET['codCLiente'];
    $instruccion = "SELECT * FROM clientes WHERE IdCliente = '$idCliente'";
    $query = mysqli_query($conection, $instruccion);
    //Para uso del ciclo las guarda y luego las muestra esa es su funcion
    $contacto = "";
    $pais = "";
    $telefono = "";
    while ($i=mysqli_fetch_assoc($query)) {
        $contacto = $i['NombreContacto'];
        $pais = $i['Pais'];
        $telefono = $i['Telefono'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Actualizar Cliente</title>
</head>
<body>
    <form action="php/actualizaCliente.php" method="POST">
    <fieldset>
    <legend>Actualizar Cliente</legend>
    <label for="contacto">Contacto</label>
    <input type="text" name="contacto" value="<?php echo $contacto;?>">
    <label for="pais">Pais</label>
    <input type="text" name="pais" value ="<?php echo $pais;?>">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" value = "<?php echo $telefono;?>">
    <input type="hidden" name="codigoCliente" value ="<?php echo $idCliente;?>">
    <input type="submit" value="Actualizar" class="boton boton-verde">
    </fieldset>
    </form>
</body>
</html>