<?php
$conexion= mysqli_connect("localhost", "root", "", "ied");

if(isset($_POST['registrar'])){

    if(strlen($_POST['usuario']) >=1 
    && strlen($_POST['password'])  >=1 && strlen($_POST['Id_cargo']) >= 1 ){

    $usuario = trim($_POST['usuario']);
  
    $password = trim($_POST['password']);
    $Id_cargo = trim($_POST['Id_cargo']);

    $consulta= "INSERT INTO login (usuario, password, Id_cargo)
    VALUES ('$usuario','$password', '$Id_cargo' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../user.php');
  }
}









?>