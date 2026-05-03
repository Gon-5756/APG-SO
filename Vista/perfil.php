<?php
session_start();

if (!isset($_SESSION['Session'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</head>

<body>
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">

        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="avion.png" alt="">
        </a>

        <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 text-center">

                <!-- 🟢 Nombre -->
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">
                    <?php echo $_SESSION['Session']['usuario']; ?>
                </h1>

                <!-- 🟢 IMAGEN (esto es lo clave) -->
                <?php if (!empty($_SESSION['Session']['imagen'])): ?>
                    <img 
                        src="/APG-SO-main/Vista/imagenes_perfil/<?php echo $_SESSION['Session']['imagen']; ?>"
                        alt="Foto de perfil"
                        class="w-32 h-32 rounded-full mx-auto mt-4 object-cover"
                    >
                <?php else: ?>
                    <p class="text-gray-500 mt-4">No hay imagen de perfil</p>
                <?php endif; ?>

            </div>
        </div>

    </div>
</section>
</body>
</html>