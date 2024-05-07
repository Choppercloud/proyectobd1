<?php
    include("../../conexion_pe.php");

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $direccion_residencia = $_POST['direccion_residencia'];
    $licencia_conduccion = $_POST['licencia_conduccion'];
    $estado = $_POST['estado'];
    $cargo1 = $_POST['cargo'];

    $query = "INSERT INTO empleados(nombres, apellidos, sexo, tipo_documento, numero_documento, telefono, 
    celular, direccion_residencia, licencia_conduccion, estado, cargo)
                  VALUES('$nombres', '$apellidos', '$sexo', '$tipo_documento', '$numero_documento', '$telefono',
                   '$celular', '$direccion_residencia', '$licencia_conduccion', '$estado', '$cargo1')";
        $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar) {
            echo '
                <script>
                    alert("Datos registrados correctamente");
                    window.location = "../../login.php";
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Hubo un error al registrar el usuario. Por favor, inténtelo de nuevo.");
                    window.location = "../../login.php"; 
                </script>
            ';
        }

        mysqli_close($conexion);    
?>