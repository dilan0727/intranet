<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','ied');
    return $con;
}

function listar($conexion){
    $sql="SELECT * FROM admisiones_matriculas";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function insertar($conexion,$codigo,$versio,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){
    $sql="INSERT INTO admisiones_matriculas(codigo,versio,nombre,categoria,fecha,tipo,archivo) VALUES('$codigo','$versio','$nombre','$categoria','$fecha','$tipo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$id){
    $sql="DELETE from admisiones_matriculas WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM admisiones_matriculas WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}