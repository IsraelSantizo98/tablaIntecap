<?php
    include 'php/conexion.php';
    //Viene desde el archivo tablaProducto en la etiqueta a
    $idProducto = $_GET['codProducto'];
    $instruccion = "SELECT * FROM productos WHERE IdProducto = '$idProducto'";
    $query = mysqli_query($conection, $instruccion);
    //Para uso del ciclo las guarda y luego las muestra esa es su funcion
    $nombreProducto = "";
    $cantidadUnidad = "";
    $precioUnidad = "";
    $existencias = "";
    while ($i=mysqli_fetch_assoc($query)) {
        $nombreProducto = $i['NombreProducto'];
        $cantidadUnidad = $i['CantidadPorUnidad'];
        $precioUnidad = $i['PrecioUnidad'];
        $existencias = $i['UnidadesEnExistencia'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Actualizar Producto</title>
</head>
<body>
    <form action="php/actualizaProducto.php" method="POST">
    <fieldset>
    <legend>Actualizar Cliente</legend>
    <label for="nombreProducto">Nombre Producto</label>
    <input type="text" name="nombreProducto" value="<?php echo $nombreProducto;?>">
    <label for="cantidadUnidad">Cantidad por Unidad</label>
    <input type="text" name="cantidadUnidad" value ="<?php echo $cantidadUnidad;?>">
    <label for="precioUnidad">Precio por Unidad</label>
    <input type="text" name="precioUnidad" value = "<?php echo $precioUnidad;?>">
    <label for="existencias">Unidades en Existencia</label>
    <input type="text" name="existencias"  value ="<?php echo $existencias;?>">
    <input type="hidden" name="codigoProducto" value ="<?php echo $idProducto;?>">
    <input type="submit" value="Actualizar" class="boton boton-verde">
    </fieldset>
    </form>
</body>
</html>