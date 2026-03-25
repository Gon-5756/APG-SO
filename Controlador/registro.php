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


		$stmt = $conn->prepare("INSERT INTO usuario (usr_name, usr_pass , usr_email) VALUES (?, ?, ?)");
		if (!$stmt) {
    die("Error en prepare(): " . $conn->error);
}
		$stmt->bind_param("sss", $nombre, $contrasenia, $mail);

		

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
?>
