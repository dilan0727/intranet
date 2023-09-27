
<?php

session_start();
$iduser=$_SESSION["Id"];
$user=$_SESSION["usuario"];
if (empty($_SESSION["Id"])){
    header("location: ../index.php");
}

include 'config/bd.php';
$conexion=conexion();
$query=titulos($conexion);
while($datostit=mysqli_fetch_assoc($query)){
  $id=$datostit['id'];
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
                        <a href="../Mapa-de-Procesos.php" title="Volver">
                        
                          <div class="volver">
                            
                          </div>
                        </a>

      <div class="listadomaestro">
          <table style="width: 100%">
          <tbody>
            <tr>
              <td rowspan="2"class="tituloind" style="width: 900px"><?php echo $titulo ;?></td>
              
                
                  
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $codigo ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $version ;?></td>
                </tr>
                <tr>
                  <td colspan="2" class="titulonom" style="width: 100px;text-align: center"><?php echo $fecha ;?></td>
                </tr>
              

            </tr>

              

              </tbody>
              </table>
              <table style="width: 100%">
              <tbody>

                <tr>
                    
                    <td   rowspan="2"class="titulodc" style="width: 320px"><?php echo $titulo1 ;?></td>
                    <td  rowspan="2"class="titulodc" style="width: 320px"><?php echo $titulo2 ;?></td>
                    <td   rowspan="2"class="titulodc" style="width: 320px"><?php echo $titulo3 ;?></td>
                    <td   rowspan="2"class="titulodc" style="width: 320px"><?php echo $titulo4 ;?></td>
                    <td  rowspan="2"class="titulodc" style="width: 320px"><?php echo $titulo5 ;?></td>
                    <td class="titulodc" colspan="4" style="width: 320px"><?php echo $titulo6 ;?></td>
                    <td rowspan="2" class="titulodc" style="width: 320px"><?php echo $titulo11 ;?></td>
                  <td  rowspan="2" class="titulodc" style="width: 320px"><?php echo $titulo12 ;?></td>
                  </tr>
                  <tr>
                    <td class="titulodc"  style="width: 80px"><?php echo $titulo7 ;?></td>
                    <td class="titulodc"  style="width: 80px"><?php echo $titulo8 ;?></td>
                    <td class="titulodc"  style="width: 80px"><?php echo $titulo9 ;?></td>
                    <td class="titulodc"  style="width: 80px"><?php echo $titulo10 ;?></td>
                    <td><a class='btn35 btn-secondary' href="editartabla.php?id=<?php echo $id?>">Editar Tabla</a> </td>
                  </tr>
                  <style>
                                       
                                        .btn35 {
                                          background-color: orange;
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
                  <?php 
                    }
                ?>

            <?php 
                    
                  
                    $query=listar($conexion);
                    $contador=0;
                    while($datos=mysqli_fetch_assoc($query)){
                        $contador++;
                        $Id=$datos['Id'];
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
               <tr>

                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $objetivocal ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $objetivoproc ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $proceso ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $indicador ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $meta ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $tri1 ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $tri2 ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $tri3 ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $tri4 ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $resultados ;?></td>
                  <td class="titulonom" style="width: 100px;text-align: center"><?php echo $cumplimiento ;?></td>
                
                  <style>
                    .titulonom {
  text-align: center;
  vertical-align: middle;
}
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
                                    
                  <td><a class='btn34 btn-secondary' href="editar.php?Id=<?php echo $Id?>">Editar</a> </td>
                  <td> <a class='btn33 btn-danger' href="acciones/eliminar.php?Id=<?php echo $Id?>">Eliminar</a></td>
                </tr>
               
                  <?php 
                    }
                ?>
        </table>
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
        <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/insertar.php">


  



        <div class="mb-2">
                <label class="form-label">OBJETIVO DE CALIDAD</label>
                <input class='form-control form-control-sm' type="text" name="objetivocal">
            </div>
        <div class="mb-2">
                <label class="form-label">OBJETIVO DE PROCESO</label>
                <input class='form-control form-control-sm' type="text" name="objetivoproc">
            </div>

            <div class="mb-2">
                <label class="form-label">PROCESO</label>
                <input class='form-control form-control-sm' type="text" name="proceso">
            </div>
            <div class="mb-2">
                <label class="form-label">INDICADOR</label>
                <input class='form-control form-control-sm' type="text" name="indicador">
            </div>
            <div class="mb-2">
                <label class="form-label">META</label>
                <input class='form-control form-control-sm' type="text" name="meta">
            </div>
            <div class="mb-2">
                <label class="form-label">TRIMESTRE I</label>
                <input class='form-control form-control-sm' type="text" name="tri1">
            </div>
            <div class="mb-2">
                <label class="form-label">TRIMESTRE II</label>
                <input class='form-control form-control-sm' type="text" name="tri2">
            </div>
            <div class="mb-2">
                <label class="form-label">TRIMESTRE III</label>
                <input class='form-control form-control-sm' type="text" name="tri3">
            </div>
       
           
            <div class="mb-2">
                <label class="form-label">TRIMESTRE IV</label>
                <input class='form-control form-control-sm' type="text" name="tri4">
            </div>

            <div class="mb-2">
                <label class="form-label">RESULTADOS</label>
                <input class='form-control form-control-sm' type="text" name="resultados">
            </div>
            <div class="mb-2">
                <label class="form-label">CUMPLIMIENTO</label>
                <input class='form-control form-control-sm' type="text" name="cumplimiento">
            </div>
            <button class="btn btn-primary btn-sm">Subir fila</button>
        </form>
       
      </div>
      <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    </div>

       
      </div>
      <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    </div>

