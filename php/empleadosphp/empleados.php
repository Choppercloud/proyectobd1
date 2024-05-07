<?php

include("../../conexion_pe.php");
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
    <title>Formulario de Empleados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/empleados.css">
</head>
<body>
    <div class ="empleados_form">
        <h2>Formulario de Empleados</h2>
        <form action="registro_empleado.php" method="POST">
            <input type="text" name="nombres" placeholder="Nombres" required><br><br>
            <input type="text" name="apellidos" placeholder="Apellidos" required><br><br>
            <select name="sexo" required>
                <option value="" disabled selected hidden>Sexo</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select><br><br>
            <select name="tipo_documento" required>
                <option value="" disabled selected hidden>Tipo de Documento</option>
                <option value="C.C">C.C - Cedula de Ciudadania</option>
                <option value="T.I">T.I - Tarjeta de Identificacion</option>
            </select><br><br>
            <input type="text" name="numero_documento" placeholder="Número de Documento" required><br><br>
            <input type="text" name="telefono" placeholder="Teléfono"><br><br>
            <input type="text" name="celular" placeholder="Celular" required><br><br>
            <input type="text" name="direccion_residencia" placeholder="Dirección de Residencia" required><br><br>
            <input type="text" name="licencia_conduccion" placeholder="Licencia de Conducción"><br><br>
            <select name="estado" required>
                <option value="" disabled selected hidden>Estado</option>
                <option value="Activo">Activo</option>
                <option value="Retirado">Retirado</option>
            </select><br><br>
            <select name="cargo" required>
                <option value="" disabled selected hidden>Cargo</option>
                <option value="Administrador">Administrador</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Ventanilla">Ventanilla</option>
            </select><br><br>            
            <input type="submit" value="Guardar">
    </form>
</div>
</body>
</html>
