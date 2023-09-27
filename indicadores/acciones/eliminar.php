<?php 
$Id=$_GET['Id'];
include '../config/bd.php';
$conexion=conexion();
$query=eliminar($conexion,$Id);
if($query){
 header('location:../gestion.php?eliminar=success');
}else{
    header('location:../gestion.php?eliminar=error');
}
?>