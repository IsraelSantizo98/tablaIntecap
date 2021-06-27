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
  <title>Tabla Colaboradores</title>
</head>
<body>
<h2>Clientes Neptuno</h2>
<table>
<!-- Fila nueva -->
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Tratamiento</th>
    <th>Ciudad</th>
    <th>Pais</th>
  </tr>
<?php
  //Guarda la senetencia sql pero no se ejecuta hasta hacer uso de la variable query posterior
  $instruccion = "SELECT * FROM colaboradores";
  //carga el resultado de la instrccion a la base de datos, y sus parametros se usa la conexion del archivo conexion y la variable instruccion del script sql
  $query = mysqli_query($conection, $instruccion);
  //Se usa la variable i para que se asigne individualmente toda la consulta de cliente que tiene guardada query
  while($i=mysqli_fetch_assoc($query)){
    //Se coloca en echo la escritura html de table tr
    echo "<tr><td>".$i['Nombre']."</td><td>".$i['Apellidos']."</td><td>".$i['Tratamiento']."</td><td>".$i['Ciudad']."</td><td>".$i['Pais']."</td></tr>";
  }
?>
  <!-- <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr> -->
</table>

</body>
</html>