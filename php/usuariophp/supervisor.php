<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERVISOR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css/supervisor.css">
  
</head>
<body>
    <h1>HOLA SUPERVISOR</h1>

    <?php
        include("../../conexion_pe.php");

        function mostrarRutas($conexion) {
            $sql = "SELECT * FROM rutas";
            $query = mysqli_query($conexion, $sql);

            echo "<h2>Datos de las Rutas</h2>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Destino</th><th>Costo</th><th>Funcionario</th><th>Fecha y Hora</th></tr>";

            while($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['destino']."</td>";
                echo "<td>".$row['costo']."</td>";
                echo "<td>".$row['funcionario']."</td>";
                echo "<td>".$row['fecha_hora']."</td>";
                echo "</tr>";
            }

            echo "</table>";
        }

        function mostrarVentas($conexion) {
            $sql = "SELECT * FROM venta_tickets";
            $query = mysqli_query($conexion, $sql);

            echo "<h2>Datos de Ventas de Tickets</h2>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Ruta</th><th>Espacio De Venta</th><th>Espacio De Salida</th><th>Telefono</th><th>Celular</th>";

            while($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nombre']."</td>";
                echo "<td>".$row['espacio_venta']."</td>";
                echo "<td>".$row['espacio_salida']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td>".$row['celular']."</td>";
                echo "</tr>";
            }

            echo "</table>";
        }

function mostrarUsuarios($conexion) {
    $sql = "SELECT * FROM usuario";
    $query = mysqli_query($conexion, $sql);

    echo "<h2>Datos de Usuarios</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Contraseña</th><th>Cargo</th></tr>";

    while($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>"; 
        echo "<td>".$row['cargo']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}


        mostrarRutas($conexion);
        mostrarVentas($conexion);
        mostrarUsuarios($conexion);
    ?>
</body>
</html>
