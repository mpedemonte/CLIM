<?php
session_start();
//Preguntamos si no esta conectado
if(empty($_SESSION["estado"]))
  header("Location: logincontacto.php?error=Debe+Conectarse");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contacto</title>
  <link rel="stylesheet" type="text/css" href="veterinarias.css">
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
        <li><a href="CerrarSesionContacto.php">Cerrar Sesion</a></li>
        <!--<form method="post" >
          <li><input type="submit" name="submitLogForm" value="Iniciar sesión"></li>
          <li><input type="pass" name="userpassword" placeholder="Clave"></li>
          <li><input type="text" name="username" placeholder="Nombre de usuario"></li>
        </form>-->
      </ul>
    </nav>
  <form name="contactform" method="get" action="CorreoContacto.php">
    <h1>Contacto</h1>
    <p>Cualquier duda, sugerencia o reclamo de la pagina por favor contactar con nosotros mediante el siguiente
formulario.</p>
  <textarea  name="message" maxlength="10000" cols="100" rows="30"></textarea><br>
  <input type="submit" value="Enviar">
</form>
<?php
    if(isset($_GET["error"])){
      $error = $_GET["error"];
      echo "<p style='text-align:center'>$error</p>";
    }
  ?>
</body>
</html>