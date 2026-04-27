<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in test</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="avion.png" alt="Logo">
            </a>

            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-sm xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Iniciar sesión
                    </h1>

                    <form class="space-y-4 md:space-y-6" action="../Controlador/iniciosesion.php" method="post">
                        
                        <div>
                            <label for="usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nombre de usuario
                            </label>
                            <input type="text" id="usuario" name="usuario" placeholder="Nombre" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div>
                            <label for="mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Email
                            </label>
                            <input type="email" name="mail" id="mail" placeholder="name@company.com" required 
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div>
                            <label for="contrasenia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Contraseña
                            </label>
                            <input type="password" name="contrasenia" id="contrasenia" placeholder="••••••••" required 
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" required
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-white">Recuérdame</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-white">
                                ¿Olvidó su contraseña?
                            </a>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Iniciar sesión
                        </button>

                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            ¿No tiene cuenta? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-white">Registro</a>
                        </p>
                    </form>
                </div>
            </div>

            <div class="mt-8 text-center">
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
            </div>
        </div>
    </section>
</body>

</html>