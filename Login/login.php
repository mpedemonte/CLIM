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
        <li><a href="solicitud.php">Contacto</a>
        <!--<form method="post" >
          <li><input type="submit" name="submitLogForm" value="Iniciar sesión"></li>
          <li><input type="pass" name="userpassword" placeholder="Clave"></li>
          <li><input type="text" name="username" placeholder="Nombre de usuario"></li>
        </form>-->
      </ul>
    </nav>
    <form class="formul" onsubmit="return Validar(this)" action="validalogin.php"  method="post">
      <h3>Ingresa al foro</h3>
      <fieldset>
        <legend>Ingresar datos</legend> 
          Usuario <input type="text" name="usuario"><br><br>
          Clave <input type="password" name="password"><br>
         <input type="submit" value="Entrar"><br>
         <ul style="list-style-type: none;">
         <li> Aun no esta registrado? <a style="color: white;text-decoration: none;" href="registrar.php">Registrese</a></li>
         <li> Olvido su contraseña? <a style="color: white;text-decoration: none;" href="cambio.php">Recuperar</a></li>
       </ul>
      </fieldset>
    </form>
    <?php
    if(isset($_GET["error"])){
      $error = $_GET["error"];
      echo "<p style='text-align:center'>$error</p>";
    }
  ?>
  </body>
</html>