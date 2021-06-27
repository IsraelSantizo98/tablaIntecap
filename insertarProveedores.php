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
    <form action="registrarProveedores.php" method="post">
    <fieldset>
    <legend>Insertar Proveedores</legend>
    <label for="nombreCompania">Nombre Compañia</label>
    <input type="text" name="nombreCompania">
    <label for="nombreContacto">Nombre Contacto</label>
    <input type="text" name="nombreContacto">
    <label for="cargoContacto">Cargo Contacto</label>
    <input type="text" name="cargoContacto">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion">
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad">
    <label for="region">Region</label>
    <input type="text" name="region">
    <label for="codPostal">Codigo Postal</label>
    <input type="text" name="codPostal">
    <label for="pais">Pais</label>
    <input type="text" name="pais">
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono">
    <label for="fax">Fax</label>
    <input type="text" name="fax">
    <label for="paginaPrincipal">Pagina Principal</label>
    <input type="text" name="paginaPrincipal">
    <input type="submit" value="Registar Proveedor" class="boton boton-verde">
    </fieldset>
    </form>
</body>
</html>