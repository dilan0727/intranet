
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
  <title>Procedimientos | Insituto Educativo Digital - Sistema de Gestión Integral</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <script
  src="https://kit.fontawesome.com/f7e8b19d78.js"
  crossorigin="anonymous"></script>
</head>
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
      <h1>SISTEMA DE GESTION INTEGRAL</h1>
    </div>
  </header>
  <div  id="main-wrapper" class="contenido__principalproce">
    <section id="main-content" class="grid-18 last-col" role="main">
    </head>
    <div class="view-content">
      <a href="Mapa-de-Procesos.php" title="Volver">
        <div class="volver">
        </div>
      </a>
      
      <div class="listadomaestro">
          <table style="width: 100%">
          <tbody>
            <tr>
              <td rowspan="2"class="tituloind" style="width: 900px">MATRIZ DE PLANEACIÓN ESTRATÉGICA</td>
              
                
                  
                  <td class="titulonom" style="width: 100px;text-align: center">MT-PE-03</td>
                  <td class="titulonom" style="width: 100px;text-align: center">Versión: 01</td>
                </tr>
                <tr>
                  <td colspan="2" class="titulonom" style="width: 100px;text-align: center">Fecha: 01/11/2021</td>
                </tr>
              

            </tr>

              

              </tbody>
              </table>
              <table style="width: 100%">
              <tbody>

                <tr>
                    <td  rowspan="2"class="titulodc" style="width: 320px">ELEMENTO DE POLITICA DE CALIDAD</td>
                    <td   rowspan="2"class="titulodc" style="width: 320px">OBJETIVO DE CALIDAD</td>
                    <td  rowspan="2"class="titulodc" style="width: 320px">OBJETIVO DE PROCESO</td>
                    <td   rowspan="2"class="titulodc" style="width: 320px">PROCESO</td>
                    <td   rowspan="2"class="titulodc" style="width: 320px">INDICADOR</td>
                    <td  rowspan="2"class="titulodc" style="width: 320px">META</td>
                    <td class="titulodc" colspan="4" style="width: 320px">SEGUIMIENTO 2021</td>
                    <td rowspan="2" class="titulodc" style="width: 320px">RESULTADOS</td>
                  <td  rowspan="2" class="titulodc" style="width: 320px">CUMPLIMIENTO 2021</td>
                  </tr>
                  <tr>
                    <td class="titulodc"  style="width: 80px">TRIMESTRE I</td>
                    <td class="titulodc"  style="width: 80px">TRIMESTRE II</td>
                    <td class="titulodc"  style="width: 80px">TRIMESTRE III</td>
                    <td class="titulodc"  style="width: 80px">TRIMESTRE IV</td>
                  </tr>
          
                  
                  


                  <tr>
                    <th rowspan="8"class="tituloind" style="width: 100px;text-align: center">Somos una institución educativa que ofrece educación básica primaria,
                      secundaria y media, educación por ciclos y educación para el trabajo y el
                      desarrollo humano con énfasis en emprendimiento y tecnología, desarrollando
                      un modelo de formación innovador, personalizado y de calidad, para personas
                      con características y situaciones particulares, en un entorno globalizado, que
                      promueve la transformación social</th>

                    <td rowspan="6"class="tituloind" style="width: 100px;text-align: center">1. Incrementar la Calidad Académica y la Excelencia de la formación</td>
                    <td class="tituloind" style="width: 100px;text-align: center">1.1 Establecer nuevos convenios interinstitucionales</td>
                    <td class="tituloind" style="width: 100px;text-align: center">Planeación Estratégica</td>
                    <td class="tituloind" style="width: 100px;text-align: center">No. de convenios interinstitucionales</td>
                    <td class="tituloind" style="width: 100px;text-align: center">3</td>
                    <td class="tituloind"></td>
                    <td class="tituloind"></td>
                    <td class="tituloind"></td>
                    <td class="tituloind"></td>
                    <td class="tituloind"></td>
                    <td class="tituloind"></td>
                    <tr>
                      <td  class="tituloind">1.2 Fortalecer los índices de Retención Académica</td>
                      <td rowspan="2" class="tituloind">Gestión Académica y Pedagógica</td>
                      <td  class="tituloind">% de retención académica </td>
                      <td  class="tituloind">85%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <td  class="tituloind">1.3 Incrementar la satisfacción de los estudiantes</td>
                      <td  class="tituloind">% Encuesta de Satisfacción</td>
                      <td  class="tituloind">85%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <td  class="tituloind">1.4 Realizar el mantenimiento de equipos de apoyo a la formación</td>
                      <td  class="tituloind">Gestión Administrativa y Financiera</td>
                      <td  class="tituloind">Plan de Mantenimiento de equipos Ejecutado</td>
                      <td  class="tituloind">100%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>
                    <tr>
                      <td  class="tituloind">1.5 Realizar el mantenimiento de los aplicativos y sistemas de información</td>
                      <td  class="tituloind">Gestión TIC</td>
                      <td  class="tituloind">Plan de mantenimiento sistemas de información y aplicativos Ejecutado</td>
                      <td  class="tituloind">100%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>
                    <tr>
                      <td  class="tituloind">1.6 Fortalecer las actividades de Bienestar Estudiantil</td>
                      <td  class="tituloind">Gestión TIC</td>
                      <td  class="tituloind">Actividades de bienestar estudiantil ejecutadas / Actividades de bienestar estudiantil programadas</td>
                      <td  class="tituloind">100%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <td  rowspan="2" class="tituloind">2. Fortalecer el crecimiento de la institución </td>
                      <td  class="tituloind">2.1 Incrementar el número de matrículas</td>
                      <td  class="tituloind">Gestión Comercial</td>
                      <td  class="tituloind">Número de estudiantes matriculados (por línea de educación) / Meta de estudiantes (por línea de educación)</td>
                      <td  class="tituloind">100%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>
                    <tr>
                      <td  class="tituloind">2.2 Fortalecer la educación continua</td>
                      <td  class="tituloind">Admisiones y Matriculas</td>
                      <td  class="tituloind">Número de cursos y diplomados vendidos / Meta educación continua</td>
                      <td  class="tituloind">100%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <th  rowspan="6" class="tituloind">A través de un sistema de gestión de
                        calidad que permite el mejoramiento continuo de los procesos, asegurando la
                        satisfacción del cliente. El Instituto Educativo Digital cuenta con un recurso
                        humano competente que brinda el mejor servicio al cliente siempre teniendo
                        en cuenta la responsabilidad con el entorno social, laboral y empresarial
                        dando cumplimiento a los requisitos legales aplicables</th>

                      <td  rowspan="6" class="tituloind">3. Mejorar la Gestión y los procesos</td>
                      <td  class="tituloind">3.1 Mejorar el desempeño del personal</td>
                      <td  rowspan="3" class="tituloind">Gestión Humana</td>
                      <td   class="tituloind">% Promedio Evaluación del Desempeño</td>
                      <td  class="tituloind">80%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>

                    </tr>
                    <tr>
                      <td   class="tituloind">3.2 Mejorar la capacitación del personal</td>
                      <td   class="tituloind">No. De capacitaciones realizadas / No. De capacitaciones programadas</td>
                      <td  class="tituloind">90%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <td   class="tituloind">3.3 Mejorar el ambiente laboral</td>
                      <td   class="tituloind">% Promedio encuesta clima laboral</td>
                      <td  class="tituloind">80%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <td  class="tituloind">3.4 Mejorar la gestión con los proveedores</td>
                      <td   class="tituloind">Gestión Administrativa y Financiera</td>
                      <td   class="tituloind">% Promedio evaluación de proveedores</td>
                      <td  class="tituloind">80%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <td  class="tituloind">3.5 Mejorar la gestión de los procesos</td>
                      <td   class="tituloind">Gestión Integral</td>
                      <td   class="tituloind">SG-SST implementado</td>
                      <td  class="tituloind">100%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                    </tr>

                    <tr>
                      <td  class="tituloind">3.6 Revisar la aplicación de la normatividad existente</td>
                      <td   class="tituloind">Planeación de la Normatividad</td>
                      <td   class="tituloind">Revisión Matriz Legal</td>
                      <td  class="tituloind">100%</td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>
                      <td class="tituloind"></td>

                    </tr>
                  




  
                  
                      
  
                

              

                      
                         

                                
                      </div>
                    </div>
                  </div>
                </div>


