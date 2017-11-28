<!doctype html>
<html lang=es>
  <head>
  <title>Formulario</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="vetecss.css">
  </head>

  <body>
<nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="mapa.php">Mapa</a></li>
        <li><a href="forovet.php">Foro</a></li>
        <li><a href="ranking.php">Votación</a></li>
        <li><a href="veterinarias.php">Veterinarias</a></li>
        <li><a href="educa.html">Educación</a></li>
        <li><a href="solicitud.php">Contacto</a></li>
        <!--<form method="post" >
          <li><input type="submit" name="submitLogForm" value="Iniciar sesión"></li>
          <li><input type="pass" name="userpassword" placeholder="Clave"></li>
          <li><input type="text" name="username" placeholder="Nombre de usuario"></li>
        </form>-->
      </ul>
    </nav>
    <form class="formul" onsubmit="return Validar(this)" action="EnviarCorreo.php"  method="get">
      <h3>Registrate</h3>
      <fieldset>
        <legend>Datos Usuario</legend> 
        <p> Los campos con * son obligatorios</p>
        Usuario*<input type="text" id="usuario" name="usuario" placeholder="Nombre" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{1,25}" title="El nombre solo tiene que tener letras de la A-Z" required> <br><br>
        Clave* <input type="password" name="password" placeholder="Clave" required><br><br>
        Correo<input type="email" name="receptor" id="ema" required><br>
            <input type="submit" name="enviar" value="Enviar">
      </fieldset>
    </form>
    <?php
    if(isset($_GET["error"])){
      $error = $_GET["error"];
      echo $error;
    }
  ?>
  </body>
</html>