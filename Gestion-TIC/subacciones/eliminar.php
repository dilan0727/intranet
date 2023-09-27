<?php 
$id=$_GET['id'];
include '../config/subbd.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
    header('location:../gestion.php?eliminar=success');
   }else{
       header('location:../gestion.php?eliminar=error');
   }
   ?>