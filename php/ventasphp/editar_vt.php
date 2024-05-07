<?php
include("../../conexion_pe.php");

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$espacio_venta = $_POST['espacio_venta'];
$espacio_salida = $_POST['espacio_salida'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$sql="UPDATE venta_tickets SET nombre='$nombre', espacio_venta='$espacio_venta', espacio_salida='$espacio_salida',telefono='$telefono',celular='$celular' WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: registro_vt.php");
}else{

}


?>