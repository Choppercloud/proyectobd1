<?php

include("../../conexion_pe.php");


$id=$_GET["id"];

$sql="DELETE FROM usuario WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: usuarios_registrados.php");
}else{

}

?>