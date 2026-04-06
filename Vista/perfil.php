<?php
session_start();
if(!isset($_SESSION['Session'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> <?php echo $_SESSION['Session']['usuario']; ?> </h1>
<div>
    <form action="../Vista/imagenes_perfil">
            <span style="font-size:20px">Tu foto de perfil:</span>
            <input type="file" name="uploadedFile" />
            </div>
            </form>
</body>
</html>
