<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ingreso | Insituto Educativo Digital - Sistema de Gestión Integral</title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script
      src="https://kit.fontawesome.com/f7e8b19d78.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
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


    <div class="contenido__principal">
      <div class="contenido__imagen">
        <img
        class="imagen__principal"
        src="imagenes/pagina_principal.png"
        alt=""
        />
      </div>
      <div class="contenido__forma">
        <form class="forma__general" name="formaRegistro" action="controlador_login.php" method="post"  onsubmit="validarFormulario(event)"> 
        <div class="forma__titulo">
          <h3 class="titulo__sesion">Inicio de Sesión</h3>
        </div>


        <div class="forma__datos">
          <label class="input__label" for="usuario">Correo electronico</label>
          <input class="input" type="text" name="usuario" id="usuario" placeholder=""/>
          <p class="forma__error forma__error--usuario"></p>
          <label class="input__label label__password" for="password">Contraseña
            <i class="password__icono password__icono--mostrar fas fa-eye" onclick="mostrarPwd()"></i>
            <i class="password__icono password__icono--ocultar fas fa-eye-slash" onclick="mostrarPwd()"></i>
          </label>
          <input class="input input__password" type="password" name="password" id="password" placeholder=""/>
          <p class="forma__error forma__error--password"></p>
        
          <div class="forma__boton">
            <input name="btningresar" class="boton boton__iniciar" type="submit" value="Iniciar Sesión" />
          </div>
        </div>
        <!--<div class="olvidarpassword">
            <a class="link__olvidar" href="recuperar-contraseña.html"
              >¿Olvidaste tu Contraseña?</a>
          </div>-->
        </form>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
