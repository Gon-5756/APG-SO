<?php

session_start();

$nombre = $_POST["usuario"] ?? '';
$contrasenia = $_POST["contrasenia"] ?? '';
$mail = $_POST["mail"] ?? '';
$verificacion = $_POST["verificacion"] ?? '';

// Validar campos
if (!empty($nombre) && !empty($contrasenia) && !empty($mail)) {

    $_SESSION['Session'] = [
        "usuario" => $nombre,
        "mail" => $mail
    ];

    header("Location: ../Vista/perfil.php");
    exit();

} else {

    $_SESSION['error'] = "Faltan completar campos";

    header("Location: ../Vista/login.php");
    exit();
}

?>