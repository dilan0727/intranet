<?php
#capturar los datos

#capturar los datos
   include '../config/bd.php';
   $Id=$_POST['Id'];
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
    
    $conexion=conexion();
    $datos=datos($conexion,$Id);
    $objetivocalA=$datos['objetivocal'];
    $objetivoprocA=$datos['objetivoproc'];
    $procesoA=$datos['proceso'];
    $indicadorA=$datos['indicador'];
    $metaA=$datos['meta'];
    $tri1A=$datos['tri1'];
    $tri2A=$datos['tri2'];
    $tri3A=$datos['tri3'];
    $tri4A=$datos['tri4'];
    $resultadosA=$datos['resultados'];
    $cumplimientoA=$datos['cumplimiento'];

    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        header("location:../editar.php?Id=$Id");
    }

    if(($objetivocal!='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal!=$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editarobjetivocal($conexion,$Id,$objetivocal);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc!='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc!=$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editarobjetivoproc($conexion,$Id,$objetivoproc);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
   
    if(($objetivocal=='' && $objetivoproc=='' && $proceso!=''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso!=$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editarproceso($conexion,$Id,$proceso);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador!='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador!=$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editarindicador($conexion,$Id,$indicador);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta!='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta!=$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editarmeta($conexion,$Id,$meta);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1!='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1!=$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editartri1($conexion,$Id,$tri1);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2!='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2!=$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editartri2($conexion,$Id,$tri2);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3!='' && $tri4=='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3!=$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editartri3($conexion,$Id,$tri3);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4!='' && $resultados==''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4!=$tri4A && $resultados==$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editartri4($conexion,$Id,$tri4);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados!=''&& $cumplimiento=='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados!=$resultadosA && $cumplimiento==$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editarresultados($conexion,$Id,$resultados);
        header("location:../editar.php?Id=$Id&&editar=success");
    }
    if(($objetivocal=='' && $objetivoproc=='' && $proceso==''&& $indicador=='' && $meta=='' && $tri1=='' && $tri2=='' && $tri3=='' && $tri4=='' && $resultados==''&& $cumplimiento!='') || ( $objetivocal==$objetivocalA  && $objetivoproc==$objetivoprocA && $proceso==$procesoA && $indicador==$indicadorA && $meta==$metaA && $tri1==$tri1A && $tri2==$tri2A && $tri3==$tri3A && $tri4==$tri4A && $resultados==$resultadosA && $cumplimiento!=$cumplimientoA) ){ #no modifico el archivo
        #solo el nombre
        $query=editarcumplimiento($conexion,$Id,$cumplimiento);
        header("location:../editar.php?Id=$Id&&editar=success");
    }

    

   