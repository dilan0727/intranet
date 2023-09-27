<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ingreso | Gas Control - Sistema de Gestión Integral</title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script
      src="https://kit.fontawesome.com/f7e8b19d78.js"
      crossorigin="anonymous"
    ></script>
    <?php
session_start();
include('conexion/abrir_conexion.php');

$USUARIO = $_POST['usuario'];
$CONTRASEÑA = $_POST['password'];

$consulta = "SELECT * FROM $tabla_db1 WHERE usuario = '$USUARIO' AND password = '$CONTRASEÑA'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
  $filas = mysqli_fetch_assoc($resultado);
  $_SESSION["Id"] = $filas["Id"];
  $_SESSION["usuario"] = $filas["usuario"];
  $id_cargo = $filas["Id_cargo"];

  if ($id_cargo == 1) {
    header("location:Mapa-de-Procesos.php");
  } else if ($id_cargo == 2) {
    header("location:usuario/Mapa-de-Procesos.php");
  }
} else {
  echo "<script>alert('¡Usuario y/o Contraseñas erroneas!');</script>";
  include("index.php");
}
?>

</html>