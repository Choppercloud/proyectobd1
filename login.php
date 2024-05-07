<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal</title>
    <link rel ="icon" href="php/style.css/images/autobus.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="php/style.css/login.css">
  

</head>
<body>
    

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para ingresar</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/usuariophp/login_usuario_be.php" class="formulario__login" method="post">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/usuariophp/registro_usuario_be.php" method="post" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre" name="nombre">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <select name="cargo" class="use_type">
                            <option value="administrador">Administrador </option>
                            <option value="supervisor">Supervisor </option>
                            <option value="ventanilla">Ventanilla </option>
                            <button type="submit">Registrarse</button>
                        </select>
                     
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

       <script src="php/style.css/js/script.js"></script>
</body>
</html>