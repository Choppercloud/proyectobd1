<?php

    include("../../conexion_pe.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $cargo = $_POST['cargo'];

    $consulta_existencia = "SELECT * FROM usuario WHERE email = '$correo'";
    $resultado_existencia = mysqli_query($conexion, $consulta_existencia);

    if(mysqli_num_rows($resultado_existencia) > 0) {
        echo '
            <script>
                alert("La dirección de correo electrónico ya está en uso. Por favor, utiliza otra dirección de correo.");
                window.location = "../../login.php"; 
            </script>
        ';
    } else {
        $query = "INSERT INTO usuario(nombre, email, password, cargo)
                  VALUES('$nombre', '$correo', '$contrasena', '$cargo')";

        $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar) {
            echo '
                <script>
                    alert("Usuario registrado correctamente");
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
    }    
?>
