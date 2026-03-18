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

    <form action="../Controlador/redireccionador.php" method="post">
        <label for="Usuario">Nombre de usuario:</label><br>
        <input type="text" id="Usuario" name="Usuario" value=""><br><br>

        <label for="mail">E-Mail:</label><br>
        <input type="email" id="mail" name="mail" value=""><br><br>
        
        <label for="Contraseña">Contraseña:</label><br>
        <input type="password" id="Contraseña" name="Contraseña" value=""><br><br>


        <input type="submit" value="Enviar">
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