<?php

session_start();



    $nombre = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];
    $mail = $_POST["mail"];
    $verificacion = $_POST["verificacion"];


    if (empty($contrasenia) || empty($mail)) {

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