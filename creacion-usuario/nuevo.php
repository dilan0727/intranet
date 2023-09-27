<?php

session_start();
$iduser=$_SESSION["Id"];
$user=$_SESSION["usuario"];
if (empty($_SESSION["Id"])){
    header("location: index.php");
}


  ?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">
<title>Nuevo Usuario | Insituto Educativo Digital - Sistema de Gestión Integral</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/es.css">

    <title>Usuarios</title>
</head>
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
                
                        <a href="user.php" title="Volver">
                        
                          <div class="volver">
                            
                          </div>
                          
                        </a>
                        <br>
                        <div class="titulop" style="width: 100%;">Bienvenido Administrador <?php echo "<td>".$user."</td>"; ?>
                        </div>

<body id="page-top">


<form  action="./includes/validar.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Registro de nuevo usuario</h3>
                            <div class="form-group">
                            <label for="usuario" class="form-label">Usuario *</label>
                            <input type="text"  id="usuario" name="usuario" class="form-control" required>
                            </div>
                         
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                  <label for="Id_cargo" class="form-label">Rol de usuario *</label>
                                <input type="number"  id="Id_cargo" name="Id_cargo" class="form-control" placeholder="Escribe el rol, 1=admin, 2=lector.">
                             
                            </div>
                      
                        
                           <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar">
                              
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>