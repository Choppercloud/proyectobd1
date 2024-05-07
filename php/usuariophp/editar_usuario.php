<?php
include("../../conexion_pe.php");

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['password'];
$cargo = $_POST['cargo'];
$sql="UPDATE usuario SET nombre='$nombre', password='$contrasena', email='$email',cargo='$cargo' WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: usuarios_registrados.php");
}else{

}


?>