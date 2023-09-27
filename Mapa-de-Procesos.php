<?php

session_start();
$iduser=$_SESSION["Id"];
$user=$_SESSION["usuario"];
if (empty($_SESSION["Id"])){
    header("location: index.php");
}
  ?>

<html lang="es" dir="ltr" class="js"><head>
  <meta charset="utf-8">
<link rel="shortcut icon" href="imagenes/logo.png" type="image/png">
<title>Mapa De Procesos | Insituto Educativo Digital - Sistema de Gestión Integral</title>
<link rel="stylesheet" href="css/estilos.css" />

<script
src="https://kit.fontawesome.com/f7e8b19d78.js"
crossorigin="anonymous"
></script>
<script>
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"calidad","theme_token":"SEhK1FF8mH44yYY0DdtUNEqrrQ5Ph9SZCYEmEVn0Puc","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/libraries\/shadowbox\/shadowbox.js":1,"sites\/all\/modules\/shadowbox\/shadowbox_auto.js":1,"sites\/all\/modules\/nice_menus\/js\/jquery.bgiframe.js":1,"sites\/all\/modules\/nice_menus\/js\/jquery.hoverIntent.js":1,"sites\/all\/modules\/nice_menus\/js\/superfish.js":1,"sites\/all\/modules\/nice_menus\/js\/nice_menus.js":1,"public:\/\/languages\/es_ayc3LSEhaxvhq7P2VPag6AOEZ_1d9OrQo5r3MipdrDg.js":1,"0":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/libraries\/shadowbox\/shadowbox.css":1,"0":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/nice_menus\/css\/nice_menus.css":1,"Sistema de Gesti\u00f3n Integral":1,"sites\/all\/themes\/calidad\/css\/calidad.css":1,"sites\/all\/themes\/calidad\/css\/base.css":1,"sites\/all\/themes\/calidad\/css\/adaptive-grid.css":1,"sites\/all\/themes\/calidad\/css\/smartphone.css":1,"sites\/all\/themes\/calidad\/css\/smartphone-portrait.css":1,"sites\/all\/themes\/calidad\/css\/smartphone-landscape.css":1,"sites\/all\/themes\/calidad\/css\/ipad.css":1,"sites\/all\/themes\/calidad\/css\/ipad-portrait.css":1,"sites\/all\/themes\/calidad\/css\/ipad-landscape.css":1,"sites\/all\/themes\/calidad\/css\/iphone.css":1,"sites\/all\/themes\/calidad\/css\/widescreen.css":1}},"shadowbox":{"animate":true,"animateFade":true,"animSequence":"wh","auto_enable_all_images":0,"auto_gallery":0,"autoplayMovies":true,"continuous":false,"counterLimit":10,"counterType":"default","displayCounter":true,"displayNav":true,"enableKeys":true,"fadeDuration":0.35,"handleOversize":"resize","handleUnsupported":"link","initialHeight":160,"initialWidth":320,"language":"es","modal":false,"overlayColor":"#000","overlayOpacity":0.8,"resizeDuration":0.55,"showMovieControls":true,"slideshowDelay":0,"viewportPadding":20,"useSizzle":false},"nice_menus_options":{"delay":800,"speed":"slow"},"urlIsAjaxTrusted":{"\/procedimientos?idpr=2":true}});
</script>

<!--desarollador||Dilan Eduardo Cuellar Corredor.
contacto||dilan0727@gmail.com-->
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
              src="imagenes/logo.png"
              alt="Este es el logo"
            />
          </div>  
          <div class="titulo">
            <h1>SISTEMA DE GESTIÓN INTEGRAL</h1>
          </div>
          
          
       
        
    </header>
    <div  id="main-wrapper" class="contenido__principalproce">
        <section id="main-content" class="grid-18 last-col" role="main">            
            <div class="region region-content">
            <section id="block-system-main" class="block block-system">
                    <div>
                        <div class="view view-procedimientos-y-formatos view-id-procedimientos_y_formatos view-display-id-page view-dom-id-2ed9efb3afdc498a8485994c28f5e0a8">
                            <div class="view-content">
                                <br>
                                
                                <div  class="titulop" style="width: 100%;">Mapa De Procesos
                                </div>
                                <style>
                                        /* código CSS aquí */
                                        button {
                                          background-color: #0055a5;
                                          border: none;
                                          color: #fff;
                                          padding: 15px 30px;
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
                                          <button onclick="window.location.href='creacion-usuario/user.php'">Usuarios</button>
                                <div class="procesos">
                                    <div class="marco" >
                                      <div ><img src="imagenes/mapadeprocesos.png" width="1100" height="630"></div>
                                        
                                          <div class="marco00">
                                          </div ></a>
                                          
                                          <a href="planeacion-estrategica/planeacion-estrategica.php" ><div class="marco01 btn btnes carpet">Planeación Estratégica</div></a>
                                          <a href="planeacion-de-la-normatividad/planeacion-de-la-normatividad.php" ><div class="marco02 btn btnes carpet">Planeación de la Normatividad</div></a>
                            
                                          <a href="admisiones-y-matriculas/gestion.php" ><div class="marco03 btn btnes carpet">Admisiones y Matriculas</div></a>
                                          <a href="gestion-academica-pedagogica/gestion.php" ><div class="marco04 btn btnes carpet">Gestión Académica y Pedagógica</div></a>
                            
                                          <a href="Gestion-estudiantil/gestion.php" ><div class="marco05 btn btnes carpet">Gestión Estudiantil</div></a>
                                          <a href="Gestion-humana/gestion.php" ><div class="marco06 btn btnes carpet">Gestión Humana</div></a>
                                          <a href="Gestion-TIC/gestion.php" ><div class="marco07 btn btnes carpet">Gestión TIC</div></a>
                                          <a href="Gestion-administrativa-financiera/gestion.php" ><div class="marco08 btn btnes carpet">Gestión Administrativa y Financiera</div></a>
                             
                                          <a href="Gestion.comercial/gestion.php" ><div class="marco09 btn btnes carpet">Gestión Comercial</div></a>
                                          <a href="Gestion.integral/gestion.php" ><div class="marco10 btn btnes carpet">Gestión integral</div></a>
                                          
                                        
                                          
                                    </div>
                                    <footer role="contentinfo">
                                            <div >
                                                
                                                    <li class="titulop">
                                                           Administrador | Id: <?php echo "<td>".$iduser."</td>"; ?>
                                                    </li>
                                                    <li class="titulop">
                                                            Correo: <?php echo "<td>".$user."</td>"; ?>
                                                    </li>
                                                    <section id="block-nice-menus-1" >
                                                       <a href="indicadores/gestion.php"  title="">Indicadores de Gestión</a>
                                                    <li >
                                                        <a href="controlador/controlador_cerrar_session.php" title="">Cerrar Sesión</a>
                                                      
                                                    </li>
                                                    </section>
                                            </div>
                                        </footer>
                                    


         