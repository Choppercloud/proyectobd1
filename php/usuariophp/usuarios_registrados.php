<?php
include("../../conexion_pe.php");


$sql = "SELECT * FROM usuario";
$query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS REGISTRADOS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/gestionar_user.css">
</head>
<body>
 
<div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th class="contraseña">Contraseña</th>
                    <th>Cargo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <div class="menu">
        <a href="admin.php">Inicio</a>
            </div>
                
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['cargo'] ?></th>

                        <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
                
    </div>
    
</body>
</html>