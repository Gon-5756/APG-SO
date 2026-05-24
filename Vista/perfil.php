<?php
session_start();

if (!isset($_SESSION['Session'])) {
    header("Location: index.php");
    exit();
}


$nombreUsuario = isset($_SESSION['Session']['usuario']) ? htmlspecialchars($_SESSION['Session']['usuario']) : "Usuario";


if (!empty($_SESSION['Session']['uploadedFile'])) {
    $fotoPerfil = "/APG-SO/Vista/imagenes_perfil/" . htmlspecialchars($_SESSION['Session']['uploadedFile']);
} else {
  
    $fotoPerfil = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - <?php echo $nombreUsuario; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 dark:bg-gray-900 p-6 flex flex-col min-h-screen">

    <div class="flex justify-center mb-6">
        <a href="#" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="avion.png" alt="Logo Avión" class="h-10">
        </a>
    </div>

    <main class="flex-grow">
        <div class="max-w-5xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden">
            
            <div class="h-40 w-full bg-blue-100">
                <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1506744626753-eda8151a74a0?q=80&w=2000&auto=format&fit=crop" alt="Banner del perfil">
            </div>

            <div class="px-6 relative -mt-12 flex flex-col sm:flex-row justify-between sm:items-end pb-6 border-b border-gray-200 dark:border-gray-700 gap-4">
                
                <div class="flex items-end">
                    <img class="w-24 h-24 rounded-full border-4 border-white dark:border-gray-800 object-cover bg-white" src="<?php echo $fotoPerfil; ?>" alt="Foto de perfil">
                    
                    <div class="ml-4 mb-1">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                            <?php echo $nombreUsuario; ?>
                        </h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Usuario Activo</p>
                    </div>
                </div>

                <div class="sm:mb-1">
                    <form action="../Controlador/cerrar_sesion.php" method="post" class="m-0">
                        <button type="submit" class="w-full sm:w-auto text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Cerrar Sesion bro
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <footer class="mt-8 text-center py-4">
        <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white mb-4">
            Información de contacto
        </p>
        <div class="flex gap-4 items-center justify-center">
            <h2 class="text-sm font-medium text-gray-900 dark:text-white">
                Mail: APG@Viajes.com
            </h2>
            <a class="text-sm font-medium text-gray-900 dark:text-white hover:underline" href="https://www.youtube.com/@MoMoLaDinastia" target="_blank">
                Youtube
            </a>
            <a class="text-sm font-medium text-gray-900 dark:text-white hover:underline" href="https://www.instagram.com/gero.momo/" target="_blank">
                Instagram
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>
</html>