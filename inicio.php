<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal de Cali</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Terminal de Cali</h1>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Destinos</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="login.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="banner">
        <div class="container">
            <h2>Bienvenido a la Terminal de Cali</h2>
            <p>Descubre nuestros servicios y destinos.</p>
        </div>
    </section>

    <section id="servicios">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="servicio">
                <h3>Servicio 1</h3>
                <p>Descripción del servicio 1.</p>
            </div>
            <div class="servicio">
                <h3>Servicio 2</h3>
                <p>Descripción del servicio 2.</p>
            </div>
            <div class="servicio">
                <h3>Servicio 3</h3>
                <p>Descripción del servicio 3.</p>
            </div>
        </div>
    </section>

    <section id="destinos">
        <div class="container">
            <h2>Nuestros Destinos</h2>
            <div class="destino">
                <h3>Destino 1</h3>
                <p>Descripción del destino 1.</p>
            </div>
            <div class="destino">
                <h3>Destino 2</h3>
                <p>Descripción del destino 2.</p>
            </div>
            <div class="destino">
                <h3>Destino 3</h3>
                <p>Descripción del destino 3.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>Derechos de autor &copy; <?php echo date("Y"); ?> Terminal de Cali</p>
        </div>
    </footer>
</body>
</html>
