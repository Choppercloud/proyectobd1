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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/admin.css">
</head>
<body>
    <div class="header">
        <h1>Panel de Administración</h1>
    </div>
    <ul class="nav">
        <a href="admin.php">Inicio</a> |
    <a href="usuarios_registrados.php">Gestionar Usuarios</a> |
        <li><a href="">Ventanilla</a>
        <ul>
            <li><a href="../rutasphp/rutas_registradas.php">Rutas</a></li>
            <li><a href="../ventasphp/registro_vt.php">Venta De Tickets</a></li>
        </ul>
    </li> 
    </div>


    <div class="content">
       
    <h2>Bienvenido al Panel de Administración</h2>
        <form method="post">
            <button type="submit" name="logout">Cerrar Sesión</button>
           
        </form>
    </div>
    
</body>
</html>

