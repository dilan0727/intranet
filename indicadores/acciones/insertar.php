<?php 
#capturar los datos
    $objetivocal=$_POST['objetivocal'];
    $objetivoproc=$_POST['objetivoproc'];
    $proceso=$_POST['proceso'];
    $indicador=$_POST['indicador'];
    $meta=$_POST['meta'];
    $tri1=$_POST['tri1'];
    $tri2=$_POST['tri2'];
    $tri3=$_POST['tri3'];
    $tri4=$_POST['tri4'];
    $resultados=$_POST['resultados'];
    $cumplimiento=$_POST['cumplimiento'];



include '../config/bd.php';
$conexion=conexion();
$query=insertar($conexion,$objetivocal,$objetivoproc,$proceso,$indicador,$meta,$tri1,$tri2,$tri3,$tri4,$resultados,$cumplimiento);
if($query){
    header('location:../gestion.php?insertar=success');
}else{
    header('location:../gestion.php?insertar=error');
}


?>