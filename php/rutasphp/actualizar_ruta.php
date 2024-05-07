<?php 
    include("../../conexion_pe.php");
  
    $id = $_GET['id'];
    $sql = "SELECT * FROM rutas WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Rutas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/editar_rutas.css">
</head>
<body>
    <div class="users-form">
        <form action="editar_ruta.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="destino" placeholder="Destino" value="<?= $row['destino']?>">
            <input type="text" name="costo" placeholder="Costo" value="<?= ($row['costo']) ?>">
            <input type="text" name="funcionario" placeholder="Funcionario" value="<?= ($row['funcionario']) ?>">
            <input type="date" name="fecha_hora" placeholder="dd/mm/yy" value="<?= ($row['fecha_hora']) ?>">
           
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>