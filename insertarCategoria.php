<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Insertar Proveedores</title>
</head>
<body>
    <form action="registrarCategoria.php" method="post">
    <fieldset>
    <legend>Insertar Categoria</legend>
    <label for="nombreCategoria">Nombre Categoria</label>
    <input type="text" name="nombreCategoria">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion">
    <label for="ubicacion">Ubicacion</label>
    <input type="text" name="ubicacion">
    <input type="submit" value="Registar Categoria" class="boton boton-verde">
    </fieldset>
    </form>
</body>
</html>