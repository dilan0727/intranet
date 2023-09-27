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
function datostit($conexion,$id){
    $sql="SELECT * FROM tituloindicadores WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datostit=mysqli_fetch_assoc($query);
    return $datostit;
}


function editartitulo($conexion,$id,$titulo){
    $sql="UPDATE tituloindicadores SET titulo='$titulo' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarcodigo($conexion,$id,$codigo){
    $sql="UPDATE tituloindicadores SET codigo='$codigo' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarversion($conexion,$id,$version){
    $sql="UPDATE tituloindicadores SET version='$version' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarfecha($conexion,$id,$fecha){
    $sql="UPDATE tituloindicadores SET fecha='$fecha' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editartitulo1($conexion,$id,$titulo1){
    $sql="UPDATE tituloindicadores SET titulo1='$titulo1' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editartitulo2($conexion,$id,$titulo2){
    $sql="UPDATE tituloindicadores SET titulo2='$titulo2' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo3($conexion,$id,$titulo3){
    $sql="UPDATE tituloindicadores SET titulo3='$titulo3' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo4($conexion,$id,$titulo4){
    $sql="UPDATE tituloindicadores SET titulo4='$titulo4' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo5($conexion,$id,$titulo5){
    $sql="UPDATE tituloindicadores SET titulo5='$titulo5' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo6($conexion,$id,$titulo6){
    $sql="UPDATE tituloindicadores SET titulo6='$titulo6' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo7($conexion,$id,$titulo7){
    $sql="UPDATE tituloindicadores SET titulo7='$titulo7' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo8($conexion,$id,$titulo8){
    $sql="UPDATE tituloindicadores SET titulo8='$titulo8' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo9($conexion,$id,$titulo9){
    $sql="UPDATE tituloindicadores SET titulo9='$titulo9' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo10($conexion,$id,$titulo10){
    $sql="UPDATE tituloindicadores SET titulo10='$titulo10' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo11($conexion,$id,$titulo11){
    $sql="UPDATE tituloindicadores SET titulo11='$titulo11' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartitulo12($conexion,$id,$titulo12){
    $sql="UPDATE tituloindicadores SET titulo12='$titulo12' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}



function listar($conexion){
    $sql="SELECT * FROM indicadores";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function insertar($conexion,$objetivocal,$objetivoproc,$proceso,$indicador,$meta,$tri1,$tri2,$tri3,$tri4,$resultados,$cumplimiento){
    $sql="INSERT INTO indicadores(objetivocal,objetivoproc,proceso,indicador,meta,tri1,tri2,tri3,tri4,resultados,cumplimiento) VALUES('$objetivocal','$objetivoproc','$proceso','$indicador','$meta','$tri1','$tri2','$tri3' ,'$tri4','$resultados','$cumplimiento')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$Id){
    $sql="DELETE from indicadores WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function datos($conexion,$Id){
    $sql="SELECT * FROM indicadores WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}

function editarobjetivocal($conexion,$Id,$objetivocal){
    $sql="UPDATE indicadores SET objetivocal='$objetivocal' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarobjetivoproc($conexion,$Id,$objetivoproc){
    $sql="UPDATE indicadores SET objetivoproc='$objetivoproc' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarproceso($conexion,$Id,$proceso){
    $sql="UPDATE indicadores SET proceso='$proceso' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarindicador($conexion,$Id,$indicador){
    $sql="UPDATE indicadores SET indicador='$indicador' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarmeta($conexion,$Id,$meta){
    $sql="UPDATE indicadores SET meta='$meta' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartri1($conexion,$Id,$tri1){
    $sql="UPDATE indicadores SET tri1='$tri1' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartri2($conexion,$Id,$tri2){
    $sql="UPDATE indicadores SET tri2='$tri2' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartri3($conexion,$Id,$tri3){
    $sql="UPDATE indicadores SET tri3='$tri3' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editartri4($conexion,$Id,$tri4){
    $sql="UPDATE indicadores SET tri4='$tri4' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarresultados($conexion,$Id,$resultados){
    $sql="UPDATE indicadores SET resultados='$resultados' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarcumplimiento($conexion,$Id,$cumplimiento){
    $sql="UPDATE indicadores SET cumplimiento='$cumplimiento' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}


function editar($conexion,$objetivocal,$objetivoproc,$proceso,$indicador,$meta,$tri1,$tri2,$tri3,$tri4,$resultados,$cumplimiento){
    $sql="UPDATE indicadores SET objetivocal='$objetivocal', objetivoproc='$objetivoproc', proceso='$proceso', indicador='$indicador',meta='$meta',tri1='$tri1',tri2='$tri2',tri3='$tri3',tri4='$tri4',resultados='$resultados',cumplimiento='$cumplimiento' WHERE Id=$Id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

?>