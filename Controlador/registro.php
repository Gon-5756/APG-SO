<?php
session_start();

// Conexión
$conn = new mysqli("localhost", "root", "", "base_usuarios");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Datos
$nombre = $_POST["usuario"] ?? '';
$contrasenia = $_POST["contrasenia"] ?? '';
$verificacion = $_POST["verificacion"] ?? '';
$mail = $_POST["mail"] ?? '';

// Validaciones
if (empty($nombre) || empty($contrasenia) || empty($mail)) {
    $_SESSION['error'] = "Completa todos los campos";
    header("Location: ../Vista/index.php");
    exit();
}

if ($contrasenia !== $verificacion) {
    $_SESSION['error'] = "Las contraseñas no coinciden";
    header("Location: ../Vista/index.php");
    exit();
}

// Hash
$contraseniaHash = password_hash($contrasenia, PASSWORD_DEFAULT);

// Imagen
$newFileName = null;

if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {

    $tmp = $_FILES['uploadedFile']['tmp_name'];
    $name = $_FILES['uploadedFile']['name'];

    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $permitidas = ['jpg','jpeg','png','gif'];

   if (in_array($ext, $permitidas)) {

    $newFileName = uniqid() . "." . $ext;

    //Ruta ABSOLUTA en el servidor
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/APG-SO-main/Vista/imagenes_perfil/';
    $ruta = $uploadDir . $newFileName;

    if (!move_uploaded_file($tmp, $ruta)) {
        die("Error al subir imagen");
    }
}
}

// Insertar
$stmt = $conn->prepare("INSERT INTO usuario (usr_name, usr_pass, usr_email, usr_imagen) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $contraseniaHash, $mail, $newFileName);
$stmt->execute();

// ✔ NO crear sesión acá
$_SESSION['success'] = "Usuario registrado correctamente";

// Redirigir a login
header("Location: ../Vista/login.php");
exit();

?>
