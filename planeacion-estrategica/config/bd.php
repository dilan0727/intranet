<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','ied');
    return $con;
}

function listar($conexion){
    $sql="SELECT * FROM planeacion_estrategica";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function insertar($conexion,$codigo,$versio,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){
    $sql="INSERT INTO planeacion_estrategica(codigo,versio,nombre,categoria,fecha,tipo,archivo) VALUES('$codigo','$versio','$nombre','$categoria','$fecha','$tipo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$id){
    $sql="DELETE from planeacion_estrategica WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM planeacion_estrategica WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE planeacion_estrategica SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarCodigo($conexion,$id,$codigo){
    $sql="UPDATE planeacion_estrategica SET codigo='$codigo' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarVersion($conexion,$id,$versio){
    $sql="UPDATE planeacion_estrategica SET versio='$versio' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE planeacion_estrategica SET categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editar($conexion,$id,$codigo,$versio,$nombre,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE planeacion_estrategica SET codigo='$codigo', versio='$versio', nombre='$nombre', categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

?>