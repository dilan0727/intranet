<?php 
#capturar los datos

    $nombre=$_POST['nombreArchivo'];
    $codigo=$_POST['codigo'];
    $versio=$_POST['versio'];
    $fecha_apro=$_POST['fecha_apro'];
    $fecha_imp=$_POST['fecha_imp'];
    $ubicacion=$_POST['ubicacion'];
    $conservacion=$_POST['conservacion'];
    $tipoarchivo=$_POST['tipoarchivo'];
    $Id_destino = $_GET['id'];
    


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

include '../config/subbd.php';
$conexion=conexion();
$query=insertar($conexion,$codigo,$versio,$nombre,$categoria,$fecha,$tipo,$fecha_apro,$fecha_imp,$ubicacion,$conservacion,$Id_destino,$tipoarchivo,$archivoBLOB);
if($query){
    header('location:../planeacion-de-la-normatividad.php?insertar=success');
}else{
    header('location:../planeacion-de-la-normatividad.php?insertar=error');
}
  

?>