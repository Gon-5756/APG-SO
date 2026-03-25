<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario APG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="General">
    <div id="Formulario">

    <form action="../Controlador/registro.php" method="post">
        <input type="hidden" name="accion" value="register">

        <label for="Usuario">Nombre de usuario:</label><br>
        <input type="text" id="usuario" name="usuario" value=""><br><br>

        <label for="mail">E-Mail:</label><br>
        <input type="email" id="mail" name="mail" value=""><br><br>
        
        <label for="Contraseña">Contraseña:</label><br>
        <input type="password" id="contrasenia" name="contrasenia" value=""><br><br>

        <label for="Verificacion">Verificar Contraseña:</label><br>
        <input type="password" id="verificacion" name="verificacion" value=""><br><br>


        <input type="submit" value="enviar">
    </form>
    <div id="Contacto">
    <h1>
        Información de contacto APG SO
    </h1>

    </div>

    </div>
</div>
</body>
</html>