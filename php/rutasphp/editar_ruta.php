<?php
include("../../conexion_pe.php");

$id=$_POST["id"];
$destino = $_POST['destino'];
$costo = $_POST['costo'];
$funcionario = $_POST['funcionario'];
$fecha_hora = $_POST['fecha_hora'];
$sql="UPDATE rutas SET destino='$destino', costo='$costo', funcionario='$funcionario',fecha_hora='$fecha_hora' WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: rutas_registradas.php");
}else{

}


?>