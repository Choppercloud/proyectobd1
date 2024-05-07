<?php

    include("../../conexion_pe.php");

    $nombre = $_POST['nombre'];
    $espacio_venta = $_POST['espacio_venta'];
    $espacio_salida = $_POST['espacio_salida'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];

    $query = "INSERT INTO venta_tickets(nombre, espacio_venta, espacio_salida, telefono, celular)
    VALUES('$nombre', '$espacio_venta', '$espacio_salida', '$telefono', '$celular')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Datos registrados correctamente");
                window.location = "../rutasphp/rutas.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentelo de nuevo");
                window.location = "../rutasphp/rutas.php";
            </script>
        ';

        mysqli_close($conexion);
    }