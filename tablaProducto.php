<?php
//Se usa para enlazar archivos php o html como el link en css
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
  <title>Tabla Productos</title>
</head>
<body>
<h2>Clientes Neptuno</h2>
<table>
<!-- Fila nueva -->
  <tr>
    <th>Nombre Producto</th>
    <th>Id Proveedor</th>
    <th>Id Categoria</th>
    <th>Cantidad X Unidad</th>
    <th>Precio X Unidad</th>
    <th>Existencia</th>
    <th>Pedido</th>
    <th>Nivel Nuevo Pedido</th>
    <th>Suspendido</th>
    <th>Eliminar</th>
    <th>Modificar</th>
  </tr>
<?php
  //Guarda la senetencia sql pero no se ejecuta hasta hacer uso de la variable query posterior
  $instruccion = "SELECT * FROM productos";
  //carga el resultado de la instrccion a la base de datos, y sus parametros se usa la conexion del archivo conexion y la variable instruccion del script sql
  $query = mysqli_query($conection, $instruccion);
  //Se usa la variable i para que se asigne individualmente toda la consulta de cliente que tiene guardada query
  while($i=mysqli_fetch_assoc($query)){
    //Se coloca en echo la escritura html de table tr
    echo "<tr><td>".$i['NombreProducto']."</td><td>".$i['IdProveedor']."</td><td>".$i['IdCategoria']."</td><td>".$i['CantidadPorUnidad']."</td><td>".$i['PrecioUnidad']."</td><td>".$i['UnidadesEnExistencia']."</td><td>".$i['UnidadesEnPedido']."</td><td>".$i['NivelNuevoPedido']."</td><td>".$i['Suspendido']."</td><td><a href='php/eliminarProducto.php?codProducto=".$i['IdProducto']."'><i class='fas fa-trash boton-delete'></i></a></td><td><a href='formActualizarProducto.php?codProducto=".$i['IdProducto']."'><i class='fas fa-edit boton-delete'></i></a></td></tr>";
    //En la etiqueta a se crea un metodo get para tener en cada icono el id de la fila que le corresponde
    //<i class="fas fa-plus"></i>
  }
?>
</table>
</body>
</html>