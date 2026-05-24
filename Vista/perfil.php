<?php
session_start();

if (!isset($_SESSION['Session'])) {
    header("Location: index.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "base_usuarios");

/* AGREGAR */

if(isset($_POST['agregar'])) {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuario(usr_name, usr_email, usr_pass)
            VALUES ('$nombre', '$email', '$password')";

    $conn->query($sql);

    header("Location: perfil.php");
}

/* ELIMINAR */

if(isset($_GET['eliminar'])) {

    $id = $_GET['eliminar'];

    $sql = "DELETE FROM usuario WHERE id = $id";

    $conn->query($sql);

    header("Location: perfil.php");
}
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">

        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="avion.png" alt="">
        </a>

        <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 text-center">

                
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">
                    <?php echo $_SESSION['Session']['usuario']; ?>
                </h1>

                
                <?php if (!empty($_SESSION['Session']['uploadedFile'])): ?>
                    <img
                        src="/APG-SO/Vista/imagenes_perfil/<?php echo $_SESSION['Session']['uploadedFile']; ?>"
                        alt="Foto de perfil"
                        class="w-32 h-32 rounded-full mx-auto mt-4 object-cover"
                    >
                <?php else: ?>
                    <p class="text-gray-500 mt-4">No hay imagen de perfil</p>
                <?php endif; ?>
            
                <div>
                    <form
                    class="space-y-4 md:space-y-6"
                    action="../Controlador/cerrar_sesion.php"
                    method="post">

                    <button type="submit"
                    class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Cerrar Sesion
                        </button>

                    </form>
                </div>
            </div>
        </div>

    <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-sm dark:bg-gray-800 dark:border-gray-700 mt-6">

    <div class="p-6">

        <h1 class="text-xl font-bold text-white mb-4">
            Lista de usuarios
        </h1>

        <ul id="lista_elementos">

        <?php

        $sql = "SELECT * FROM usuario";
        $resultado = $conn->query($sql);

        while($fila = $resultado->fetch_assoc()) {

        ?>

            <li class="flex justify-between items-center mb-3 text-white">

                <span>
                    <?php echo $fila['usr_name']; ?>
                    -
                    <?php echo $fila['usr_email']; ?>
                </span>

                <a
                    href="?eliminar=<?php echo $fila['id']; ?>"
                    class="bg-red-600 px-2 py-1 rounded text-sm">

                    Eliminar

                </a>

            </li>

        <?php } ?>

        </ul>

        <button
            onclick="openModal();"
            class="w-full mt-4 text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-sm px-5 py-2.5">

            Añadir elemento

        </button>

    </div>
</div>
<dialog id="formModal" class="p-6 rounded-lg">

    <h3 class="text-xl font-bold mb-4">
        Añadir usuario
    </h3>

    <form method="POST">

        <input
            type="text"
            name="nombre"
            placeholder="Nombre"
            required
            class="border p-2 rounded w-full mb-3"
        >

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
            class="border p-2 rounded w-full mb-3"
        >

        <input
            type="password"
            name="password"
            placeholder="Contraseña"
            required
            class="border p-2 rounded w-full mb-3"
        >

        <button
            type="submit"
            name="agregar"
            class="bg-green-600 text-white px-4 py-2 rounded">

            Añadir

        </button>

    </form>

    <button
        onclick="closeModal();"
        class="bg-gray-500 text-white px-4 py-2 rounded mt-3">

        Cerrar

    </button>

</dialog>

<script>

function openModal() {
    document.getElementById("formModal").showModal();
}

function closeModal() {
    document.getElementById("formModal").close();
}

</script>
</div>
</section>
</body>
</html>