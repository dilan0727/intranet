<?php

   include '../config/bd.php';
   $id=$_POST['id'];

  $titulo=$_POST['titulo'];
  $codigo=$_POST['codigo'];
  $version=$_POST['version'];
  $fecha=$_POST['fecha'];
  $titulo1=$_POST['titulo1'];
  $titulo2=$_POST['titulo2'];
  $titulo3=$_POST['titulo3'];
  $titulo4=$_POST['titulo4'];
  $titulo5=$_POST['titulo5'];
  $titulo6=$_POST['titulo6'];
  $titulo7=$_POST['titulo7'];
  $titulo8=$_POST['titulo8'];
  $titulo9=$_POST['titulo9'];
  $titulo10=$_POST['titulo10'];
  $titulo11=$_POST['titulo11'];
  $titulo12=$_POST['titulo12'];
    
    $conexion=conexion();
    $datostit=datostit($conexion,$id);
    $tituloA=$datostit['titulo'];
    $codigoA=$datostit['codigo'];
    $versionA=$datostit['version'];
    $fechaA=$datostit['fecha'];
    $titulo1A=$datostit['titulo1'];
    $titulo2A=$datostit['titulo2'];
    $titulo3A=$datostit['titulo3'];
    $titulo4A=$datostit['titulo4'];
    $titulo5A=$datostit['titulo5'];
    $titulo6A=$datostit['titulo6'];
    $titulo7A=$datostit['titulo7'];
    $titulo8A=$datostit['titulo8'];
    $titulo9A=$datostit['titulo9'];
    $titulo10A=$datostit['titulo10'];
    $titulo11A=$datostit['titulo11'];
    $titulo12A=$datostit['titulo12'];

    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        header("location:../editartabla.php?id=$id");
    }
    if(($titulo!='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo!=$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo($conexion,$id,$titulo);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo!='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo!=$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editarcodigo($conexion,$id,$codigo);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version!=''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version!=$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editarversion($conexion,$id,$version);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha!='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha!=$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editarfecha($conexion,$id,$fecha);
        header("location:../editartabla.php?id=$id&&editar=success");
    }

    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1!='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1!=$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo1($conexion,$id,$titulo1);
        header("location:../editartabla.php?id=$id&&editar=success");
    }

    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2!='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2!=$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo2($conexion,$id,$titulo2);
        header("location:../editartabla.php?id=$id&&editar=success");
    }

    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3!='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3!=$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo3($conexion,$id,$titulo3);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4!='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4!=$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo4($conexion,$id,$titulo4);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5!='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5!=$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo5($conexion,$id,$titulo5);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6!=''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6!=$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo6($conexion,$id,$titulo6);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7!=''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7!=$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo7($conexion,$id,$titulo7);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8!=''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8!=$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo8($conexion,$id,$titulo8);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9!=''&& $titulo10==''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9!=$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo9($conexion,$id,$titulo9);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10!=''&& $titulo11==''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10!=$titulo10A && $titulo11==$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo10($conexion,$id,$titulo10);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11!=''&& $titulo12=='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11!=$titulo11A && $titulo12==$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo11($conexion,$id,$titulo11);
        header("location:../editartabla.php?id=$id&&editar=success");
    }
    if(($titulo=='' && $codigo=='' && $version==''&& $fecha=='' && $titulo1=='' && $titulo2=='' && $titulo3=='' && $titulo4=='' && $titulo5=='' && $titulo6==''&& $titulo7==''&& $titulo8==''&& $titulo9==''&& $titulo10==''&& $titulo11==''&& $titulo12!='') || ( $titulo==$tituloA  && $codigo==$codigoA && $version==$versionA && $fecha==$fechaA && $titulo1==$titulo1A && $titulo2==$titulo2A && $titulo3==$titulo3A && $titulo4==$titulo4A && $titulo5==$titulo5A && $titulo6==$titulo6A && $titulo7==$titulo7A&& $titulo8==$titulo8A && $titulo9==$titulo9A && $titulo10==$titulo10A && $titulo11==$titulo11A && $titulo12!=$titulo12A) ){ #no modifico el archivo
        #solo el nombre
        $query=editartitulo12($conexion,$id,$titulo12);
        header("location:../editartabla.php?id=$id&&editar=success");
    }




    