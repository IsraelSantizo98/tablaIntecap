<?php
    //evalua si existe un metodo postal
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $usuario = $_POST['usuario'];
        $contra = $_POST['pass'];//la ultima parte de toma del name del input
        include 'php/conexion.php';
        $instruccion = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contra = '$contra'";
        $query =mysqli_query($conection, $instruccion);
        //Se carga a $r el resulado 
        $r = mysqli_fetch_array($query, MYSQLI_ASSOC);
        //Se crea un contador de cuantos registros hay en $query y debe ser uno en el caso de usuario
        $contador = mysqli_num_rows($query);
        //Sei la variabale contador es 1 entonces se inicia una session
        if($contador == 1){
            //Crea un espacio en el servidor para que se puede acceder desde la computadora que se inicia seccion
            session_start();
            //variables de tipo session se puede acceder en cualquier ficheros, se coloca un name y luego el name que esta en la variable $r
            $_SESSION['nombre'] = $r['nombre'];
            //Se obtiene el resultado del metodo post
            $_SESSION['usuario'] = $usuario;
            //$_SESSION['usuario'] = $r['usuario'];
            //con esta instruccion se envia a otro archivo
            header('location: tabla.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="auxForm">

<form id="formuPlat" method="POST" action="">
	
		<img class="logoForm" src="img/inccav.svg">
		<label class="textoPrincipal2">Login demostrativo</label>

	<input placeholder="Usuario" class="camposIngreso" type="text" required="" name="usuario">
	<input placeholder="Contraseña" class="camposIngreso" type="password" required="" name="pass">
	<input type="hidden" name="entrar" value="entrar">

	<input class="camposIngreso btnIniciar" type="submit" value="Iniciar sesión">
</form>
</div>

</body>
</html>