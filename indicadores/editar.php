
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
    $Id=$_GET['Id'];

    $conexion=conexion();
    $datos=datos($conexion,$Id);
    $objetivocal=$datos['objetivocal'];
                        $objetivoproc=$datos['objetivoproc'];
                        $proceso=$datos['proceso'];
                        $indicador=$datos['indicador'];
                        $meta=$datos['meta'];
                        $tri1=$datos['tri1'];
                        $tri2=$datos['tri2'];
                        $tri3=$datos['tri3'];
                        $tri4=$datos['tri4'];
                        $resultados=$datos['resultados'];
                        $cumplimiento=$datos['cumplimiento'];


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
            <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/editar.php">
                <input type="hidden" name="Id" value="<?php echo $Id; ?>">
              
                <div class="mb-2">
                    <label class="form-label">OBJETIVO DE CALIDAD</label>
                    <input class='form-control form-control-sm' type="text" name="objetivocal" value="<?php echo $objetivocal ;?>">
                </div>
                <div class="mb-2">
                <label class="form-label">OBJETIVO DE PROCESO</label>
                <input class='form-control form-control-sm' type="text" name="objetivoproc" value="<?php echo $objetivoproc ;?>">
            </div>
                <div class="mb-2">
                <label class="form-label">PROCESO</label>
                <input class='form-control form-control-sm' type="text" name="proceso" value="<?php echo $proceso ;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">INDICADOR</label>
                <input class='form-control form-control-sm' type="text" name="indicador"value="<?php echo $indicador ;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">META</label>
                <input class='form-control form-control-sm' type="text" name="meta"value="<?php echo $meta ;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">TRIMESTRE I</label>
                <input class='form-control form-control-sm' type="text" name="tri1"value="<?php echo $tri1 ;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">TRIMESTRE II</label>
                <input class='form-control form-control-sm' type="text" name="tri2"value="<?php echo $tri2 ;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">TRIMESTRE III</label>
                <input class='form-control form-control-sm' type="text" name="tri3"value="<?php echo $tri3 ;?>">
            </div>
       
           
            <div class="mb-2">
                <label class="form-label">TRIMESTRE IV</label>
                <input class='form-control form-control-sm' type="text" name="tri4"value="<?php echo $tri4 ;?>">
            </div>

            <div class="mb-2">
                <label class="form-label">RESULTADOS</label>
                <input class='form-control form-control-sm' type="text" name="resultados"value="<?php echo $resultados ;?>">
            </div>
            <div class="mb-2">
                <label class="form-label">CUMPLIMIENTO</label>
                <input class='form-control form-control-sm' type="text" name="cumplimiento"value="<?php echo $cumplimiento ;?>">
            </div>
                <button class="btn btn-primary btn-sm">Actualizar archivo</button>
                <a class="btn btn-warning btn-sm" href="gestion.php">Regresar</a>
            </form>
           

    </div>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>