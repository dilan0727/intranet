<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','ied');
    return $con;
}


function listar($conexion, $idd){
    $sql="SELECT * FROM subgestion_tic WHERE Id_destino = $idd";
    $query=mysqli_query($conexion,$sql);
    if (!$query) {
        printf("Error: %s\n", mysqli_error($conexion));
        exit();
    }

    return $query;

}
function insertar($conexion,$codigo,$versio,$nombre,$categoria,$fecha,$tipo,$fecha_apro,$fecha_imp,$ubicacion,$conservacion,$Id_destino,$tipoarchivo,$archivoBLOB){
    $sql="INSERT INTO subgestion_tic(codigo,versio,nombre,categoria,fecha,tipo,fecha_apro,fecha_imp,ubicacion,conservacion,Id_destino,tipoarchivo,archivo) VALUES('$codigo','$versio','$nombre','$categoria','$fecha','$tipo','$fecha_apro','$fecha_imp','$ubicacion','$conservacion','$Id_destino','$tipoarchivo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$id){
    $sql="DELETE from subgestion_tic WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM subgestion_tic WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE subgestion_tic SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarCodigo($conexion,$id,$codigo){
    $sql="UPDATE subgestion_tic SET codigo='$codigo' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarVersion($conexion,$id,$versio){
    $sql="UPDATE subgestion_tic SET versio='$versio' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarfechaA($conexion,$id,$fecha_apro){
    $sql="UPDATE subgestion_tic SET fecha_apro='$fecha_apro' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarfechaIm($conexion,$id,$fecha_imp){
    $sql="UPDATE subgestion_tic SET fecha_imp='$fecha_imp' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarUbicacion($conexion,$id,$ubicacion){
    $sql="UPDATE subgestion_tic SET ubicacion='$ubicacion' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarConservacion($conexion,$id,$conservacion){
    $sql="UPDATE subplaneacion_de_la_normatividad SET conservacion='$conservacion' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarTipo($conexion,$id,$tipoarchivo){
    $sql="UPDATE subplaneacion_de_la_normatividad SET tipoarchivo='$tipoarchivo' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}


function editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE subplaneacion_de_la_normatividad SET categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}


?>