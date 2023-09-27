<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "ied";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "login"; 
	$tabla_db2 = "planeacion_estrategica"; 
   // tabla de usuarios
	echo "conectado...";
	
	
	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();

	}


?>	