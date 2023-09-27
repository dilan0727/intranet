
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
<title>Procedimientos | Insituto Educativo Digital - Sistema de Gestión Integral</title>

<link rel="stylesheet" href="../css/estilos.css" href="../bootstrap/bootstrap.min.css"/>

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
<a href="#main-content" class="element-invisible element-focusable">Pasar al contenido principal</a>
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
                        <a href="../Mapa-de-Procesos.php" title="Volver">
                        
                          <div class="volver">
                            
                          </div>
                          
                        </a>
                        <br>
                        <div class="titulop" style="width: 100%;">Procesos Estratégicos
                        </div>
                        <table style="width: 100%">
                          <tbody>
                            <tr>
                              <td style="width: 100%">
                                <div class="titulopf">Planeación Estratégica
          <table style="width: 100%">
            <tbody>
            <?php 
                    include 'config/bd.php';
                    $conexion=conexion();
                    $query=listar($conexion);
                    $contador=0;
                    while($datos=mysqli_fetch_assoc($query)){
                        $contador++;
                        $id=$datos['id'];
                        $codigo=$datos['codigo'];
                        $versio=$datos['versio'];
                        $nombre=$datos['nombre'];
                        $categoria=$datos['categoria'];
                        $fecha=$datos['fecha'];
                        $archivo=$datos['archivo'];
                        $tipo=$datos['tipo'];
                        $titulo=$nombre.'.'.$categoria;

                    $valor="";
                    if($categoria=='jpg' || $categoria=='png'){
                        $valor="<img width='50' src='data:../image/jpg;base64,".base64_encode($archivo)."'>";
                    }

                    if($categoria=='pdf'){
                        $valor="<img  width='50' src='../img/pdf.png'>";
                    }

                    if($categoria=='xls' || $categoria=='xlsm' ){
                        $valor="<img  width='50' src='../img/exel.png'>";
                    }

                    if($categoria=='doc' || $categoria=='docx'){
                        $valor="<img  width='50' src='../img/word.png'>";
                    }
                    if($categoria=='mp4'){
                        $valor="<img  width='50' src='../img/desconocido.png'>";
                    }

                    if($categoria=='mp3'){
                        $valor="<img  width='50' src='../img/desconocido.png'>";
                    }

                    if($valor==''){
                        $valor="<img  width='50' src='../img/desconocido.png'>";
                    }

                    
                ?>
              <tr>
                <td class="codigo" width="50px"><?php echo $codigo ;?>
                  <br>
                  <br>
                  <a href="tabla.php?id=<?php echo $id?>" title="Documentos">
                    <div class="registros">
                    </div>
                  </a>
                  <br>
                  <b class="doc">Ver Documentos
                  </b>
                 
                </td>
                <td class="profor"><b><?php echo $nombre ;?></b>
                <br>
                <b>Versión: </b><?php echo $versio ;?>
                <br>
                <b>Fecha Aprobación:
                </b>
                  <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2020-07-22T00:00:00-05:00"><?php echo $fecha ;?></span>
                  <br>
                  <br>
                  <span class="file">
                    <img class="file-icon" alt="PDF icon" src="../imagenes/pdf.png" >
                    <a href="visualizacion.php?id=<?php echo $id?>"  ><?php echo $titulo;?></a>
                    <td><a class='btn34 btn-secondary' href="editar.php?id=<?php echo $id?>">Editar</a> <a class='btn34 btn-danger' href="acciones/eliminar.php?id=<?php echo $id?>">Eliminar</a></td>
                </span>
                      </td>
                     
                    </tr>
                   
          </tbody>
           <?php 
                    }
                ?>
        </table>
        <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/insertar.php">


        
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
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo">
            </div>
            <button class="btn btn-primary btn-sm">Subir archivo</button>
        </form>
       
      </div>
      <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    </div>

