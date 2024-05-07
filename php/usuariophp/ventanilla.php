<?php
session_start();  

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();

    header("Location: ../../login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventanilla</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/ventanilla.css">
</head>
<body>
    <main>
        <div class="contenedor_ventanilla">
            <form action="../ventasphp/venta_ventanilla.php" method="post">
                <h2>Reserva tus tickets</h2>
                <input type="text" placeholder="Nombre" name="nombre">
                <input type="text" placeholder="Espacio de venta de tickets" name="espacio_venta">
                <input type="text" placeholder="Espacio de salida" name="espacio_salida">
                <input type="text" placeholder="Telefono" name="telefono">
                <input type="text" placeholder="Celular" name="celular">
                <button type="submit">Enviar</button>
            </form>
            <a href="../rutasphp/rutas.php">Ir a la página de rutas</a>
            <form action="" method="post">
                <button type="submit" name="logout">Cerrar sesión</button>
            </form>
        </div>
    </main>
</body>
</html>
