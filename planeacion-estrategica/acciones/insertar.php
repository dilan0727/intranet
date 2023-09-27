<?php 
#capturar los datos
    $nombre=$_POST['nombreArchivo'];
    $codigo=$_POST['codigo'];
    $versio=$_POST['versio'];
    $archivo=$_FILES['archivo'];
    var_dump($archivo);
#categoria y tipo
$tipo=$archivo['type'];
$categoria=explode('.',$archivo['name'])[1];

#fecha
$fecha=date('Y-m-d H:i:s');

$tmp_name=$archivo['tmp_name'];
$contenido_archivo=file_get_contents($tmp_name);
$archivoBLOB=addslashes($contenido_archivo);

include '../config/bd.php';
$conexion=conexion();
$query=insertar($conexion,$codigo,$versio,$nombre,$categoria,$fecha,$tipo,$archivoBLOB);
if($query){
    header('location:../planeacion-estrategica.php?insertar=success');
}else{
    header('location:../planeacion-estrategica.php?insertar=error');
}


?>