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
    <title>Rutas</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/rutas.css">
</head>
<body>
    <main>
        <div class="contenedor_rutas">
        <form action="registro_rutas.php" method="post" class ="">
                <h2>Rutas</h2>
                <input type="text" placeholder="Destino" name="destino">
                <input type="text" placeholder="Costo" name="costo">
                <input type="text" placeholder="Funcionario" name="funcionario">
                <input type="date" placeholder="dd/mm/yy" name="fecha_hora">
                <button>Enviar</button>
            </form>
            <a href="../usuariophp/ventanilla.php">Regresar a Ventanilla</a>
            <form action="" method="post">
                <button type="submit" name="logout">Cerrar sesión</button>
            </form>
        </div>
    </main>
</body>
</html>