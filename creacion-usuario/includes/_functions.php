<?php
   
require_once ("_db.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
     

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

           

		}

	}
    
    function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","ied");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= " DELETE FROM login WHERE id = $id ";

    mysqli_query($conexion, $consulta);


    header('Location:../user.php');

}

  









