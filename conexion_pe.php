<?php

$conexion = mysqli_connect("localhost", "root", "", "terminal");
$link = mysqli_connect("localhost", "root", "", "terminal");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

 $sql =  "SELECT `id`, `nombre`, `email`, `password`, `cargo` FROM `usuario` WHERE email = ?";
 $stmt = mysqli_prepare($link, $sql);


    /*
    if($conexion){
        echo 'Conectado exitosamente a la Base de datos';
    }else{
        echo 'No se ha podido conectar a la base de datos';
    }
    */  
