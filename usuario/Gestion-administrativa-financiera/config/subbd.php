<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','ied');
    return $con;
}


function listar($conexion, $idd){
    $sql="SELECT * FROM subgestion_administrativa_financiera WHERE Id_destino = $idd";
    $query=mysqli_query($conexion,$sql);
    if (!$query) {
        printf("Error: %s\n", mysqli_error($conexion));
        exit();
    }

    return $query;

}

function datos($conexion,$id){
    $sql="SELECT * FROM subgestion_administrativa_financiera WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}


?>