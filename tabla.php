<?php
//Se usa para enlazar archivos php o html como el link en css
include 'php/conexion.php';
session_start();
//Se toma la variable usuario de login.php, con isset valida que exista la variable usuario y que no sea nula
if(!isset($_SESSION['usuario'])){
  //Nos envia a login asi que no nos muestra nada interno sin registrarse
  header('location: login.php');
  //Y termina la session
  die();
}else{
  //continuar la session de login.php
  //session_start();
  //Se guarda en una variable y se toma del archivo login.php
  $nombre = $_SESSION['nombre'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
  <title>Tabla Clientes</title>
</head>
<body>
  <?php
    echo "<h2>Bienvenido: $nombre</h2>";
  ?>
<a href="logout.php">Cerrar Sesión</a>
<h2>Clientes Neptuno</h2>
<table>
<!-- Fila nueva -->
  <tr>
    <th>Nombre Compañia</th>
    <th>Nombre Contacto</th>
    <th>Cargo Contacto</th>
    <th>Direccion</th>
    <th>Ciudad</th>
    <th>Region</th>
    <th>Eliminar</th>
    <th>Modificar</th>
  </tr>
<?php
  //Guarda la senetencia sql pero no se ejecuta hasta hacer uso de la variable query posterior
  $instruccion = "SELECT * FROM clientes";
  //carga el resultado de la instrccion a la base de datos, y sus parametros se usa la conexion del archivo conexion y la variable instruccion del script sql
  $query = mysqli_query($conection, $instruccion);
  //Se usa la variable i para que se asigne individualmente toda la consulta de cliente que tiene guardada query
  while($i=mysqli_fetch_assoc($query)){
    //Se coloca en echo la escritura html de table tr
    echo "<tr><td>".$i['NombreCompania']."</td><td>".$i['NombreContacto']."</td><td>".$i['CargoContacto']."</td><td>".$i['Direccion']."</td><td>".$i['Ciudad']."</td><td>".$i['Region']."</td><td><a href='php/eliminarCliente.php?codCLiente=".$i['IdCliente']."'><i class='fas fa-trash boton-delete'></i></a></td><td><a href='formActualizarCliente.php?codCLiente=".$i['IdCliente']."'><i class='fas fa-edit boton-delete'></i></a></td></tr>";
    //En la etiqueta a se crea un metodo get para tener en cada icono el id de la fila que le corresponde
  }
?>
</table>

</body>
</html>