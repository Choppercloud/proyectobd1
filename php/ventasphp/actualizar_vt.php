<?php 
    include("../../conexion_pe.php");
  
    $id = $_GET['id'];
    $sql = "SELECT * FROM venta_tickets WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Venta De Tickets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/editarvt.css">
</head>
<body>
    <div class="venta_ventanilla-form">
        <form action="editar_vt.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['nombre']?>">
            <input type="text" name="espacio_venta" placeholder="Espacio De Venta" value="<?= ($row['espacio_venta']) ?>">
            <input type="text" name="espacio_salida" placeholder="Espacio De Salida" value="<?= ($row['espacio_salida']) ?>">
            <input type="text" name="telefono" placeholder="Telefono" value="<?= ($row['telefono']) ?>">
            <input type="text" name="celular" placeholder="Celular" value="<?= ($row['celular']) ?>">
    
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
