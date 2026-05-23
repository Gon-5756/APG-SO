<?php

session_start();

// Obtener datos del formulario
$contrasenia = $_POST["contrasenia"] ?? '';
$mail = $_POST["mail"] ?? '';

// Validar campos vacíos
if (empty($contrasenia) || empty($mail)) {

    $_SESSION['error'] = "Faltan completar campos";

    header("Location: ../Vista/login.php");
    exit();
}

// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "base_usuarios");

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta preparada
$sql = "SELECT usr_name, usr_pass, usr_email, usr_imagen
        FROM usuario
        WHERE usr_email = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error en prepare(): " . $conn->error);
}

// Asociar parámetro
$stmt->bind_param("s", $mail);

// Ejecutar consulta
$stmt->execute();

// Obtener resultado
$resultado = $stmt->get_result();

// Verificar si existe el usuario
if ($resultado->num_rows > 0) {

    // Obtener fila
    $fila = $resultado->fetch_assoc();

    /*
        Verificar contraseña

        Si las contraseñas en la BD están en texto plano:
    */
    if (password_verify($contrasenia, $fila['usr_pass'])) {

        // Crear sesión
        $_SESSION['Session'] = [
            "usuario" => $fila['usr_name'],
            "mail" => $fila['usr_email'],
            "uploadedFile" => $fila['usr_imagen']
        ];

        header("Location: ../Vista/perfil.php");
        exit();

    } else {

        $_SESSION['error'] = "Contraseña incorrecta";

        header("Location: ../Vista/login.php");
        exit();
    }

} else {

    $_SESSION['error'] = "El usuario no existe";

    header("Location: ../Vista/login.php");
    exit();
}

// Cerrar conexiones
$stmt->close();
$conn->close();

?>