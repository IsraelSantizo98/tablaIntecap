<?php
//variables para pasar credenciales de acceso a la base de datos
$server = "localhost";
$user = "root";
$password = "";
$bd = "neptuno";

//Almacena el valor positivo de la conexion si se logra conectar
$conection =mysqli_connect($server, $user, $password, $bd);
if (!$conection) {
    echo "Error: No se pudo conectar a MySQL" . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>