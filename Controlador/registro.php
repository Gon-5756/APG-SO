<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base_usuarios";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



// Prepare and bind
//    if ($contrasenia == "12345678" && $verificacion == $contrasenia) {


		$stmt = $conn->prepare("INSERT INTO usuario (usr_name, usr_pass , usr_email, usr_imagen) VALUES (?, ?, ?, ?)");
		if (!$stmt) {
    die("Error en prepare(): " . $conn->error);
}
		$stmt->bind_param("ssss", $nombre, $contrasenia, $mail, $imagen);

		

// Set parameters and execute

		$nombre = $_POST["usuario"];
		$contrasenia = $_POST["contrasenia"];
		$verificacion = $_POST["verificacion"];
		$mail = $_POST["mail"];
		$stmt->execute();


    header("Location: ../Vista/login.php");
exit();

   // } //else{
        //header("Location: ../Vista/index.php");
        //exit();
    //}

	// Make query
	$query = "SELECT * FROM usuario";
	$result = mysqli_query($conn, $query);
	$usuarios = [];
	while($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = $row;
	}
	print_r($usuarios);

	//Actualizar base de datos para meter imagen de usuario
	if (isset($_FILES['uploadedFile'])) {

    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];

    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExtension, $allowedExtensions)) {

        $uploadFileDir = '../Vista/imagenes_perfil/';
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $_SESSION['message'] = 'Archivo subido correctamente.';
        } else {
            $_SESSION['message'] = 'Error al mover el archivo.';
        }

    } else {
        $_SESSION['message'] = 'Solo imágenes (jpg, png, gif).';
    }

} else {
    $_SESSION['message'] = 'No se seleccionó archivo.';
}
?>
