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
$stmt = $conn->prepare("INSERT INTO usuario (usr_name, usr_pass , usr_email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $pass_user, $email);

// Set parameters and execute
$firstname = $_POST["nombre"];
$pass_user = $_POST["contraseña"];
$email = $_POST["mail"];
$stmt->execute();

	// Make query
	$query = "SELECT * FROM usuario";
	$result = mysqli_query($conn, $query);
	$usuarios = [];
	while($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = $row;
	}
	print_r($usuarios);
?>
