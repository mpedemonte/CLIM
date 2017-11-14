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
        <li><a href="mapa.html">Mapa</a></li>
        <li><a href="login.php">Foro</a></li>
        <li><a href="loginranking.php">Votación</a></li>
        <li><a href="veterinarias.html">Veterinarias</a></li>
        <!--<li><a href="registro.html">Registrarse</a> </li>-->
        <li><a href="educa.html">Educación</a></li>
        <!--<form method="post" >
          <li><input type="submit" name="submitLogForm" value="Iniciar sesión"></li>
          <li><input type="pass" name="userpassword" placeholder="Clave"></li>
          <li><input type="text" name="username" placeholder="Nombre de usuario"></li>
        </form>-->
      </ul>
    </nav>
    <form class="formul" onsubmit="return Validar(this)" action="validaloginranking.php"  method="post">
      <h3>Ingresa para votar</h3>
      <fieldset>
        <legend>Ingresar datos</legend> 
          Usuario <input type="text" name="usuario"><br><br>
          Clave <input type="password" name="password"><br>
         <input type="submit" value="Entrar"><br>
         <ul style="list-style-type: none;">
         <li> Aun no esta registrado? <a style="color: white;text-decoration: none;" href="registrar.php">Registrese</a></li>
       </ul>
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
