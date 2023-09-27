
<?php

session_start();
$iduser=$_SESSION["Id"];
$user=$_SESSION["usuario"];
if (empty($_SESSION["Id"])){
    header("location: ../index.php");
}


  ?>
<html lang="es" dir="ltr" class="js"><head>
  <meta charset="utf-8">
<link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">
<title>Procedimientos | Insituto Educativo Digital - Sistema de Gestión Integral </title>

<link rel="stylesheet" href="../css/estilos.css" href="css/estilos.css" href="bootstrap/bootstrap.min.css"/>
<link rel="stylesheet"  href="css/estilos.css" href="bootstrap/bootstrap.min.css"/>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
<script
src="https://kit.fontawesome.com/f7e8b19d78.js"
crossorigin="anonymous"
></script>
<script>
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"calidad","theme_token":"SEhK1FF8mH44yYY0DdtUNEqrrQ5Ph9SZCYEmEVn0Puc","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/libraries\/shadowbox\/shadowbox.js":1,"sites\/all\/modules\/shadowbox\/shadowbox_auto.js":1,"sites\/all\/modules\/nice_menus\/js\/jquery.bgiframe.js":1,"sites\/all\/modules\/nice_menus\/js\/jquery.hoverIntent.js":1,"sites\/all\/modules\/nice_menus\/js\/superfish.js":1,"sites\/all\/modules\/nice_menus\/js\/nice_menus.js":1,"public:\/\/languages\/es_ayc3LSEhaxvhq7P2VPag6AOEZ_1d9OrQo5r3MipdrDg.js":1,"0":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/libraries\/shadowbox\/shadowbox.css":1,"0":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/nice_menus\/css\/nice_menus.css":1,"Sistema de Gesti\u00f3n Integral":1,"sites\/all\/themes\/calidad\/css\/calidad.css":1,"sites\/all\/themes\/calidad\/css\/base.css":1,"sites\/all\/themes\/calidad\/css\/adaptive-grid.css":1,"sites\/all\/themes\/calidad\/css\/smartphone.css":1,"sites\/all\/themes\/calidad\/css\/smartphone-portrait.css":1,"sites\/all\/themes\/calidad\/css\/smartphone-landscape.css":1,"sites\/all\/themes\/calidad\/css\/ipad.css":1,"sites\/all\/themes\/calidad\/css\/ipad-portrait.css":1,"sites\/all\/themes\/calidad\/css\/ipad-landscape.css":1,"sites\/all\/themes\/calidad\/css\/iphone.css":1,"sites\/all\/themes\/calidad\/css\/widescreen.css":1}},"shadowbox":{"animate":true,"animateFade":true,"animSequence":"wh","auto_enable_all_images":0,"auto_gallery":0,"autoplayMovies":true,"continuous":false,"counterLimit":10,"counterType":"default","displayCounter":true,"displayNav":true,"enableKeys":true,"fadeDuration":0.35,"handleOversize":"resize","handleUnsupported":"link","initialHeight":160,"initialWidth":320,"language":"es","modal":false,"overlayColor":"#000","overlayOpacity":0.8,"resizeDuration":0.55,"showMovieControls":true,"slideshowDelay":0,"viewportPadding":20,"useSizzle":false},"nice_menus_options":{"delay":800,"speed":"slow"},"urlIsAjaxTrusted":{"\/procedimientos?idpr=2":true}});
</script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <script type="text/javascript">
  jQuery.browser={};(function(){jQuery.browser.msie=false; jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)\./)){ jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
</script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="html not-front logged-in no-sidebars page-procedimientos" style="">
<div id="skip-link">
<a href="#main-content" class="element-invisible element-focusable"></a>
</div>
  <div id="page">
    <header class="cabecera"> 
          <div class="logo">
            <img
              class="logo__imagen"
              src="../imagenes/logo.png"
              alt="Este es el logo"
            />
          </div>  
          <div class="titulo">
            <h1>SISTEMA DE GESTION INTEGRAL</h1>
          </div>
    </header>
    <div  id="main-wrapper" class="contenido__principalproce">
              <section id="main-content" class="grid-18 last-col" role="main">            <div class="region region-content">
                <section id="block-system-main" class="block block-system">
                  <div>
                    <div class="view view-procedimientos-y-formatos view-id-procedimientos_y_formatos view-display-id-page view-dom-id-2ed9efb3afdc498a8485994c28f5e0a8">
                      <div class="view-content">
                        <a href="gestion.php" title="Volver">
                        
                        <div class="volver">
        </div>
      </a>
      <div class="listadomaestro">
          <table style="width: 100%">
          <tbody>
            <tr>
              <td class="titulopf">LISTADO DE DOCUMENTOS Y REGISTROS </td>
            </tr>
            </tbody>
            </table>
            <table style="width: 100%">
            <tbody>
              <tr>
                <td class="titulodc" style="width: 320px">NOMBRE  </td>
                <td class="titulodc" style="width: 320px">DESCARGAR</td>
                <td class="titulodc" style="width: 320px">CÓDIGO</td>
                <td class="titulodc" style="width: 320px">VERSIÓN</td>
                <td class="titulodc" style="width: 320px">Fecha Aprobación</td>
                <td class="titulodc" style="width: 320px">Fecha Implementación</td>
                <td class="titulodc" style="width: 320px">UBICACIÓN</td>
                <td class="titulodc" style="width: 320px">CONSERVACIÓN</td>

              
              </tr>
              <?php 
                    $idd=$_GET['id'];                 
                    include 'config/subbd.php';
                    $conexion=conexion();
                    $query=listar($conexion, $idd);
                    $contador=0;
                    
                    while($datos=mysqli_fetch_assoc($query)){
                        $contador++;
                        $id=$datos['id'];
                        $codigo=$datos['codigo'];
                        $versio=$datos['versio'];
                        $nombre=$datos['nombre'];
                        $categoria=$datos['categoria'];
                        $fecha=$datos['fecha'];
                        $fecha_apro=$datos['fecha_apro'];
                        $fecha_imp=$datos['fecha_imp'];
                        $ubicacion=$datos['ubicacion'];
                        $conservacion=$datos['conservacion'];
                        $Id_destino=$datos['Id_destino'];
                        $archivo=$datos['archivo'];
                        $tipoarchivo=$datos['tipoarchivo'];
                        $tipo=$datos['tipo'];
                ?>  
              <tr>
                <td class="titulonom"><b><?php echo $nombre ;?>
                </td>
                <td class="titulonom">
                  
                  <span class="file">

                  <?php if ($tipoarchivo == "caracterizacion" || $tipoarchivo == "anexo"|| $tipoarchivo == "procedimiento"|| $tipoarchivo == "normograma"|| $tipoarchivo == "requisito"|| $tipoarchivo == "instructivo"): ?>
                    <a href="subvisualizacion.php?id=<?php echo $id; ?>&idd=<?php echo $idd?>" src="../imagenes/pdf.png"><?php echo $tipo; ?></a>
                       <?php else: ?>
                        <a href="cargar.php?id=<?php echo $id; ?>" target="_blank"><?php echo $tipo; ?></a>
<?php endif; ?>
                  </span>
                  <table style="width: 100%">
                  </table>
                  </td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $codigo ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $versio ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $fecha_apro ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $fecha_imp ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $ubicacion ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $conservacion ;?></td>
                  <style>
                                        /* código CSS aquí */
                                        .btn34 {
                                          background-color: #0050a4;
                                          border: none;
                                          color: #fff;
                                          padding: 10px 20px;
                                          text-align: center;
                                          text-decoration: none;
                                          display: inline-block;
                                          font-size: 16px;
                                          margin: 4px 2px;
                                          cursor: pointer;
                                          border-radius: 5px;
                                          float: right; /* añadimos esta propiedad para alinear a la derecha */
                                        }
                                      </style>
<style>
                                        /* código CSS aquí */
                                        .btn33 {
                                          background-color: red;
                                          border: none;
                                          color: #fff;
                                          padding: 10px 20px;
                                          text-align: center;
                                          text-decoration: none;
                                          display: inline-block;
                                          font-size: 16px;
                                          margin: 4px 2px;
                                          cursor: pointer;
                                          border-radius: 5px;
                                          float: right; /* añadimos esta propiedad para alinear a la derecha */
                                        }
                                      </style>
                  <td ><a class='btn34 btn-danger' href="subacciones/eliminar.php?id=<?php echo $id?>">Eliminar</a> </td>
                  <td ><a class='btn33 btn-danger' href="subeditar.php?id=<?php echo $id?>&idd=<?php echo $idd?>">Editar</a> </td>                  </tr>
                

               
                  <?php 
                    }
                ?>



<style>
    form {
        margin: auto;
        width: 50%;
    }
    .mb-2 {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }
    .form-label {
        font-weight: bold;
        color: #333;
    }
    .form-control {
        border: 1px solid #ccc;
        border-radius: 3px;
        box-shadow: none;
    }
    .form-control:focus {
        border-color: #3E6AE1;
        box-shadow: none;
    }
    .btn-primary {
        background-color: #3E6AE1;
        border-color: #3E6AE1;
        color: #fff;
        font-weight: bold;
    }
    .btn-primary:hover {
        background-color: #304e9f;
        border-color: #304e9f;
    }


.btn {
  background-color: #f8f9fa;
  border-color: #ced4da;
  color: #495057;
}

.btn:hover {
  background-color: #e9ecef;
  border-color: #ced4da;
  color: #495057;
}

.btn:focus {
  box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
  color: #fff;
}

.btn-primary:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);


  
}
 </style>
        
        </table>
        <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="subacciones/insertar.php?id=<?php echo $idd; ?>">


  



        <div class="mb-2">

  
                <label class="form-label">Nombre del archivo</label>
                <input class='form-control form-control-sm' type="text" name="nombreArchivo">
            </div>
        <div class="mb-2">
                <label class="form-label">Codigo</label>
                <input class='form-control form-control-sm' type="text" name="codigo">
            </div>

            <div class="mb-2">
                <label class="form-label">Version</label>
                <input class='form-control form-control-sm' type="text" name="versio">
            </div>
            <div class="mb-2">
                <label class="form-label">Fecha Aprobación</label>
                <input class='form-control form-control-sm' type="text" name="fecha_apro">
            </div>
            <div class="mb-2">
                <label class="form-label">Fecha Implementación</label>
                <input class='form-control form-control-sm' type="text" name="fecha_imp">
            </div>
            <div class="mb-2">
                <label class="form-label">Ubicacion</label>
                <input class='form-control form-control-sm' type="text" name="ubicacion">
            </div>
            <div class="mb-2">
                <label class="form-label">Conservacion</label>
                <input class='form-control form-control-sm' type="text" name="conservacion">
            </div>
            <div class="mb-2">
                <label class="form-label">Tipo de archivo</label>
                <input class='form-control form-control-sm' type="text" name="tipoarchivo">
            </div>
       
           
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo">
            </div>
            <button class="btn btn-primary btn-sm">Subir archivo</button>
        </form>
       
      </div>
      <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    </div>

