<?php
include("../../conexion_pe.php");


$sql = "SELECT * FROM venta_tickets";
$query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE VENTA  DE TICKETS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/venta.css">
</head>
<body>

 
<div class="users-table">
        <h2>Registro De Venta y Tickets</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Espacio De Venta</th>
                    <th>Espacio De Salida</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <div class="menu">
        <a href="../usuariophp/admin.php">Inicio</a>
            </div>
                
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['espacio_venta'] ?></th>
                        <th><?= $row['espacio_salida'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['celular'] ?></th>

                        <th><a href="actualizar_vt.php?id=<?= $row['id'] ?>" class="venta_tickets-table--edit">Editar</a></th>
                        <th><a href="eliminar_vt.php?id=<?= $row['id'] ?>" class="venta_tickets-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
                
    </div>
    
</body>
</html>