<?php
session_start();
$nombre = $_POST["Usuario"];
$contrasenia = $_POST["Contraseña"];
$verificacion = $_POST["Verificacion"];
$mail = $_POST["mail"];



if ($nombre == "Pepe" && $contrasenia == "12345678" && $verificacion == $contrasenia && $mail == "pepe@gmail.com") {

    $_SESSION['Session']=[
    "Usuario" => $nombre,
    "mail" => $mail
];

    header("Location: ../Vista/perfil.php");
exit();

} else{
        header("Location: ../Vista/index.php");
        exit();

}

?>