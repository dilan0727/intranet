<?php 
$id=$_GET['id'];
include '../config/bd.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../planeacion-de-la-normatividad.php?eliminar=success');
}else{
    header('location:../planeacion-de-la-normatividad.php?eliminar=error');
}
?>