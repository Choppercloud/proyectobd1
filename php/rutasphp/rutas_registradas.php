<?php
include("../../conexion_pe.php");


$sql = "SELECT * FROM rutas";
$query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUTAS REGISTRADAS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/rutas_registradas.css">
</head>
<body>
 
<div class="rutas-table">
        <h2>Rutas registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destino</th>
                    <th>Costo</th>
                    <th>Funcionario</th>
                    <th>Fecha y Hora</th>
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
                        <th><?= $row['destino'] ?></th>
                        <th><?= $row['costo'] ?></th>
                        <th><?= $row['funcionario'] ?></th>
                        <th><?= $row['fecha_hora'] ?></th>
                        

                        <th><a href="actualizar_ruta.php?id=<?= $row['id'] ?>" class="rutas-table--edit">Editar</a></th>
                        <th><a href="eliminar_ruta.php?id=<?= $row['id'] ?>" class="rutas-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
                
    </div>
    
</body>
</html>