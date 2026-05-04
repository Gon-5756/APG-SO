<!DOCTYPE html>
<html lang="en">

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

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-sm xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Registro
                    </h1>
                    <form
                    class="space-y-4 md:space-y-6"
                    action="../Controlador/registro.php"
                    method="post"
                    enctype="multipart/form-data">
                        <input type="hidden" name="accion" value="register">
                        <div>
                            <label for="usuario"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de
                                usuario</label>
                            <input type="text" id="usuario" placeholder="Nombre" name="usuario" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="usuario" value=""><br><br>
                        </div>

                        <div>
                            <label for="mail"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="mail" name="mail" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="nombre@gmail.com" required=""><br><br>

                        </div>
                        <div>
                            <label for="Contraseña"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                            <input type="password" id="contrasenia" name="contrasenia" placeholder="••••••••" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required=""><br><br>
                        </div>

                        <div>
                            <label for="verificacion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verificar
                            Contraseña</label>
                            <input type="password" id="verificacion" name="verificacion" placeholder="••••••••" value=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required=""><br><br>
                        </div>

                        <div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Registro

                        </button>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">

                                    </div>

                                </div>

                            <div>
                                <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu foto de perfil:</span>
                                <input type="file" name="uploadedFile"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            </div>

                            </div>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Ya tiene cuenta? Inicie sesion
    
                                <a
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="login.php">Inicio de
                                sesion </a>
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
                    <a class="text-sm font-medium text-gray-900 dark:text-white hover:underline" href="https://www.youtube.com/@MoMoLaDinastia/" target="_blank">
                        Youtube
                    </a>
                    <a class="text-sm font-medium text-gray-900 dark:text-white hover:underline" href="https://www.instagram.com/gero.momo/" target="_blank">
                        Instagram
                    </a>
            </div>


        </div>

        </div>
    </section>

<script>
                const form = document.getElementById("form_registro");
                const nombre = document.getElementById("uname");
                const email = document.getElementById("email");
                const password = document.getElementById("password");
                const confirmar = document.getElementById("confirmar");
                form.addEventListener("submit",function(event){
                    event.preventDefault();
                    if( nombre.value == "" || email.value == "" || password.value == "" ){
                        alert("completa todos los campos");
                        return;
                    }else if( password.value != confirmar.value){
                        alert("Las contraseñas no coinciden");
                        return;
                    }else if ( password.value.length < 8){
                        alert("La contraseña debe tener mínimo 8 caracteres");
                        return;
                    }
                    form.submit();
                });

</script>

</body>

</html>