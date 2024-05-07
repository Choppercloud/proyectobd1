<?php

include("../../conexion_pe.php");


$id=$_GET["id"];

$sql="DELETE FROM rutas WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: rutas_registradas.php");
}else{

}

?>