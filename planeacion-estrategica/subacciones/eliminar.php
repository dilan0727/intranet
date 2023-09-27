<?php 
$id=$_GET['id'];
include '../config/subbd.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
    header('location:../planeacion-estrategica.php?eliminar=success');
   }else{
       header('location:../planeacion-estrategica.php?eliminar=error');
   }
   ?>