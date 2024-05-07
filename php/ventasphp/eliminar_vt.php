<?php

include("../../conexion_pe.php");


$id=$_GET["id"];

$sql="DELETE FROM venta_tickets WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: registro_vt.php");
}else{

}

?>