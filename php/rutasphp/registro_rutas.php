<?php

    include("../../conexion_pe.php");

    $destino = $_POST['destino'];
    $costo = $_POST['costo'];
    $funcionario = $_POST['funcionario'];
    $fecha_hora = $_POST['fecha_hora'];

    $query = "INSERT INTO rutas(destino, costo, funcionario, fecha_hora)
    VALUES('$destino', '$costo', '$funcionario', '$fecha_hora')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Datos registrados correctamente");
                window.location = "rutas.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentelo de nuevo");
                window.location = "rutas.php";
            </script>
        ';

        mysqli_close($conexion);
    }