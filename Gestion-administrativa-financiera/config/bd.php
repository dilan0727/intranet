<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','ied');
    return $con;
}

function listar($conexion){
    $sql="SELECT * FROM gestion_administrativa_financiera";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function insertar($conexion,$codigo,$versio,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){
    $sql="INSERT INTO gestion_administrativa_financiera(codigo,versio,nombre,categoria,fecha,tipo,archivo) VALUES('$codigo','$versio','$nombre','$categoria','$fecha','$tipo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$id){
    $sql="DELETE from gestion_administrativa_financiera WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM gestion_administrativa_financiera WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE gestion_administrativa_financiera SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarCodigo($conexion,$id,$codigo){
    $sql="UPDATE gestion_administrativa_financiera SET codigo='$codigo' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarVersion($conexion,$id,$versio){
    $sql="UPDATE gestion_administrativa_financiera SET versio='$versio' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE gestion_administrativa_financiera SET categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editar($conexion,$id,$codigo,$versio,$nombre,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE gestion_administrativa_financiera SET codigo='$codigo', versio='$versio', nombre='$nombre', categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

?>