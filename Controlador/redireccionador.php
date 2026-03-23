<?php

session_start();



$accion = $_POST["accion"];
var_dump($accion);

switch($accion){
        case 'register':
    $nombre = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];
    $verificacion = $_POST["verificacion"];
    $mail = $_POST["mail"];



    if ($contrasenia == "12345678" && $verificacion == $contrasenia) {

        $_SESSION['Session']=[
            "usuario" => $nombre,
            "mail" => $mail
        ];

    header("Location: ../Vista/login.php");
exit();

    } else{
        header("Location: ../Vista/index.php");
        exit();
    }

break;

    case 'login':
    $nombre = $_POST["usuario"];
    $contrasenia = $_POST["contraseña"];
    $verificacion = $_POST["verificacion"];
    $mail = $_POST["mail"];



    if ($nombre == "Pepe" && $contrasenia == "12345678" && $verificacion == $contrasenia && $mail == "pepe@gmail.com") {

        $_SESSION['Session']=[
            "usuario" => $nombre,
            "mail" => $mail
        ];

    header("Location: ../Vista/perfil.php");
exit();

    } else{
        header("Location: ../Vista/login.php");
        exit();
    }
break;
}


?>