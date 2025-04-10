<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniMarket</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para comprar</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrate para iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <!--Formularios para el LOGIN y el REGISTER-->
            <div class="contenedor__login-register">

                <!--LOGIN-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo institucional" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>

                </form>

                <!--REGISTER-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrase</h2>
                    <input type="text" placeholder="Cédula" name="cedula">
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Apellidos" name="apellidos">
                    <input type="text" placeholder="Carrera" name="carrera">
                    <input type="text" placeholder="Correo institucional" name="correo_institucional">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <input type="text" placeholder="Rol" name="rol">
                    <button>Registrarse</button>

                </form>
            </div>

        </div>

    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>