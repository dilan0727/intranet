<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','ied');
    return $con;
}
function titulos($conexion){
    $sql="SELECT * FROM tituloindicadores";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function listar($conexion){
    $sql="SELECT * FROM indicadores";
    $query=mysqli_query($conexion,$sql);
    return $query;
}


function datos($conexion,$Id){
    $sql="SELECT * FROM indicadores WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}



?>