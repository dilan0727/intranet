<?php
#capturar los datos
$idd=$_GET['idd'];
   include '../config/subbd.php';
    $id=$_POST['id'];
    $nombre=$_POST['nombreArchivo'];
    $codigo=$_POST['codigo'];
    $versio=$_POST['versio'];

    $fecha_apro=$_POST['fecha_apro'];
    $fecha_imp=$_POST['fecha_imp'];
    $ubicacion=$_POST['ubicacion'];
    $conservacion=$_POST['conservacion'];
    $tipoarchivo=$_POST['tipoarchivo'];

    $archivo=$_FILES['archivo'];
    
    $conexion=conexion();
    $datos=datos($conexion,$id);
    $nombreA=$datos['nombre'];
    $codigoA=$datos['codigo'];
    $versioA=$datos['versio'];

    $fecha_aproA=$datos['fecha_apro'];
    $fecha_impA=$datos['fecha_imp'];
    $ubicacionA=$datos['ubicacion'];
    $conservacionA=$datos['conservacion'];
    $tipoarchivoA=$datos['tipoarchivo'];

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio==''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre==$nombreA  && $codigo==$codigoA && $versio==$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA) ){ #no modifico el archivo
        header("location:../subeditar.php?id=$id&idd=$idd");
    }

    if(($archivo['size']==0 && $nombre!='' && $codigo=='' && $versio==''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre!=$nombreA && $codigo==$codigoA && $versio==$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #solo el nombre
        $query=editarNombre($conexion,$id,$nombre);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo!='' && $versio==''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo!=$codigoA && $versio==$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #solo el codigo
        $query=editarCodigo($conexion,$id,$codigo);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio!=''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo==$codigoA && $versio!=$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #solo la version
        $query=editarVersion($conexion,$id,$versio);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio==''&& $fecha_apro!=''&& $fecha_imp==''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo==$codigoA && $versio==$versioA && $fecha_apro!=$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #solo la version
        $query=editarfechaA($conexion,$id,$fecha_apro);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio==''&& $fecha_apro==''&& $fecha_imp!=''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo==$codigoA && $versio==$versioA && $fecha_apro!=$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #solo la version
        $query=editarfechaIm($conexion,$id,$fecha_imp);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio==''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion!=''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo==$codigoA && $versio==$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion!=$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #solo la version
        $query=editarUbicacion($conexion,$id,$ubicacion);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio==''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion==''&& $conservacion!=''&& $tipoarchivo=='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo==$codigoA && $versio==$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion!=$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #solo la version
        $query=editarConservacion($conexion,$id,$conservacion);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }

    if(($archivo['size']==0 && $nombre=='' && $codigo=='' && $versio==''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo!='') || ($archivo['size']==0 && $nombre==$nombreA && $codigo==$codigoA && $versio==$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo!=$tipoarchivoA)){
        #solo la version
        $query=editarTipo($conexion,$id,$tipoarchivo);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");
    }



    #categoria y tipo
    $tipo=$archivo['type'];
    $categoria=explode('.',$archivo['name'])[1];

    #fecha
    $fecha=date('Y-m-d H:i:s');

    $tmp_name=$archivo['tmp_name'];
    $contenido_archivo=file_get_contents($tmp_name);
    $archivoBLOB=addslashes($contenido_archivo);

    if(($archivo['size']>0 && $nombre=='' && $codigo=='' && $versio==''&& $fecha_apro==''&& $fecha_imp==''&& $ubicacion==''&& $conservacion==''&& $tipoarchivo=='') || ($archivo['size']>0 && $nombre==$nombreA && $codigo==$codigoA && $versio==$versioA && $fecha_apro==$fecha_aproA && $fecha_imp==$fecha_impA && $ubicacion==$ubicacionA && $conservacion==$conservacionA && $tipoarchivo==$tipoarchivoA)){
        #modificar solo archivo
        $query=editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB);
        header("location:../subeditar.php?id=$id&idd=$idd&&editar=success");

    }
 
   




