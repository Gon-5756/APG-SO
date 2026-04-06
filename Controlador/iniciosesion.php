<?php

session_start();



    $nombre = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];
    $mail = $_POST["mail"];



    if ($nombre == "Pepe" && $contrasenia == "12345678" && $mail == "pepe@gmail.com") {

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


?>