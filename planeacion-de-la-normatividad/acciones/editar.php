<?php
#capturar los datos
   include '../config/bd.php';
    $id=$_POST['id'];
    $nombre=$_POST['nombreArchivo'];
    $codigo=$_POST['codigo'];
    $versio=$_POST['versio'];
    $archivo=$_FILES['archivo'];
    
    $conexion=conexion();
    $datos=datos($conexion,$id);
    $nombreA=$datos['nombre'];
    $codigoA=$datos['codigo'];
    $versioA=$datos['versio'];

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio=='') || ($archivo['size']==0 && $nombre==$nombreA  && $codigo==$codigoA && $versio==$versioA) ){ #no modifico el archivo
        header("location:../editar.php?id=$id");
    }

    if(($archivo['size']==0 && $nombre!='' && $codigo=='' && $versio=='') || ($archivo['size']==0 && $nombre!=$nombreA && $codigo==$codigoA && $versio==$versioA)){
        #solo el nombre
        $query=editarNombre($conexion,$id,$nombre);
        header("location:../editar.php?id=$id&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo!='' && $versio=='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo!=$codigoA && $versio==$versioA)){
        #solo el codigo
        $query=editarCodigo($conexion,$id,$codigo);
        header("location:../editar.php?id=$id&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio!='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo==$codigoA && $versio!=$versioA)){
        #solo la version
        $query=editarVersion($conexion,$id,$versio);
        header("location:../editar.php?id=$id&&editar=success");
    }
    #categoria y tipo
    $tipo=$archivo['type'];
    $categoria=explode('.',$archivo['name'])[1];

    #fecha
    $fecha=date('Y-m-d H:i:s');

    $tmp_name=$archivo['tmp_name'];
    $contenido_archivo=file_get_contents($tmp_name);
    $archivoBLOB=addslashes($contenido_archivo);

    if(($archivo['size']>0 && $nombre=='' && $codigo=='' && $versio=='') || ($archivo['size']>0 && $nombre==$nombreA && $codigo==$codigoA && $versio==$versioA)){
        #modificar solo archivo
        $query=editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB);
        header("location:../editar.php?id=$id&&editar=success");

    }
    if(($archivo['size']>0 && $nombre!=''&& $codigo!='' && $versio!='') || ($archivo['size']>0 && $nombre!=$nombreA && $codigo!=$codigoA && $versio!=$versioA )){
        #modificar todo
        $query=editar($conexion,$id,$codigo,$versio,$nombre,$categoria,$tipo,$fecha,$archivoBLOB);
        header("location:../editar.php?id=$id&&editar=success");
    }
   




