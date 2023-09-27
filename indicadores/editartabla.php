
<?php

session_start();
$iduser=$_SESSION["Id"];
$user=$_SESSION["usuario"];
if (empty($_SESSION["Id"])){
    header("location: index.php");
}
  ?>
<?php 
    include 'config/bd.php';
    $id=$_GET['id'];

    $conexion=conexion();
    $datostit=datostit($conexion,$id);
    $titulo=$datostit['titulo'];
    $codigo=$datostit['codigo'];
    $version=$datostit['version'];
    $fecha=$datostit['fecha'];
    $titulo1=$datostit['titulo1'];
    $titulo2=$datostit['titulo2'];
    $titulo3=$datostit['titulo3'];
    $titulo4=$datostit['titulo4'];
    $titulo5=$datostit['titulo5'];
    $titulo6=$datostit['titulo6'];
    $titulo7=$datostit['titulo7'];
    $titulo8=$datostit['titulo8'];
    $titulo9=$datostit['titulo9'];
    $titulo10=$datostit['titulo10'];
    $titulo11=$datostit['titulo11'];
    $titulo12=$datostit['titulo12'];


?>


<html lang="es" dir="ltr" class="js"><head>
  <meta charset="utf-8">
<link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">
<title>Indicadores | Insituto Educativo Digital - Sistema de Gestión Integral</title>

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
                        <a href="gestion.php" title="Volver">
                        
                          <div class="volver">
                            
                          </div>
                          
                        </a>
                        <br>
                        <div class="titulop" style="width: 100%;">Indicadores
                        </div>
                        <table style="width: 100%">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
            <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/editartabla.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
              
                <div class="mb-2">
                    <label class="form-label">Titulo Principal</label>
                    <input class='form-control form-control-sm' type="text" name="titulo" value="<?php echo $titulo;?>">
                </div>
                <div class="mb-2">
                <label class="form-label">Codigo</label>
                <input class='form-control form-control-sm' type="text" name="codigo" value="<?php echo $codigo;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Version</label>
                <input class='form-control form-control-sm' type="text" name="version" value="<?php echo $version;?>">
            </div>
                <div class="mb-2">
                <label class="form-label">Fecha</label>
                <input class='form-control form-control-sm' type="text" name="fecha" value="<?php echo $fecha;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 1</label>
                <input class='form-control form-control-sm' type="text" name="titulo1"value="<?php echo $titulo1;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 2</label>
                <input class='form-control form-control-sm' type="text" name="titulo2"value="<?php echo $titulo2;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 3</label>
                <input class='form-control form-control-sm' type="text" name="titulo3"value="<?php echo $titulo3;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 4</label>
                <input class='form-control form-control-sm' type="text" name="titulo4"value="<?php echo $titulo4;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 5</label>
                <input class='form-control form-control-sm' type="text" name="titulo5"value="<?php echo $titulo5;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 6</label>
                <input class='form-control form-control-sm' type="text" name="titulo6"value="<?php echo $titulo6;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 7</label>
                <input class='form-control form-control-sm' type="text" name="titulo7"value="<?php echo $titulo7;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 8</label>
                <input class='form-control form-control-sm' type="text" name="titulo8"value="<?php echo $titulo8;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 9</label>
                <input class='form-control form-control-sm' type="text" name="titulo9"value="<?php echo $titulo9;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 10</label>
                <input class='form-control form-control-sm' type="text" name="titulo10"value="<?php echo $titulo10;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 11</label>
                <input class='form-control form-control-sm' type="text" name="titulo11"value="<?php echo $titulo11;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">Titulo 12</label>
                <input class='form-control form-control-sm' type="text" name="titulo12"value="<?php echo $titulo12;?>">
            </div>
          

           
                <button class="btn btn-primary btn-sm">Actualizar Tabla</button>
                <a class="btn btn-warning btn-sm" href="gestion.php">Regresar</a>
            </form>
           

    </div>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>