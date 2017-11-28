<?php
session_start();
//Preguntamos si no esta conectado
if(empty($_SESSION["estado"]))
	header("Location: login.php?error=Debe+Conectarse");
//Estoy dentro del sistema

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Veterinarias</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="vetecss.css">
    <link rel="shortcut icon" href="icono.ico" />

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
        <li><a href="CerrarSesion.php">Cerrar Sesion</a></li>
        <!--<form method="post" >
          <li><input type="submit" name="submitLogForm" value="Iniciar sesión"></li>
          <li><input type="pass" name="userpassword" placeholder="Clave"></li>
          <li><input type="text" name="username" placeholder="Nombre de usuario"></li>
        </form>-->
      </ul>
    </nav>
<?php
	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
?>
<table>
<form name="form" action="agregar.php" method="post">
	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
    <tr>
      <td>Mensaje</td>
      <td><textarea name="mensaje" cols="50" rows="5" required="required"></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
    </tr>
  </form>
</table>
  </body>
</html>
