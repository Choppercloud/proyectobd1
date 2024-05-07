<?php 
    include("../../conexion_pe.php");
  
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuarios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/editar.css">
</head>
<body>
    <div class="users-form">
        <form action="editar_usuario.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
            <input type="email" name="email" placeholder="Email" value="<?= ($row['email']) ?>">
            <input type="password" name="password" placeholder="Password" value=""> 
            <select name="cargo" class="user_type">
                <option value="supervisor" <?= $row['cargo'] == 'supervisor' ? 'selected' : '' ?>>Supervisor</option>
                <option value="ventanilla" <?= $row['cargo'] == 'ventanilla' ? 'selected' : '' ?>>Ventanilla</option>
            </select>
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
