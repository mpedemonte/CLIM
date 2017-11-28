<?php
	include("conex.inc");
		$cor = $_GET["correo"];
?>
<!DOCTYPE>
<html>

	<head>
		<title>Editar contraseña</title>
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
    <br><br><br>
		<form class="formul" action="cambiocontrasena.php" method="get">
			<fieldset>
				<legend>Ingrese nueva contraseña</legend>
				 <input type="hidden" name="correo" value="<?php echo $cor ?>">
       			 Nueva Contraseña <input type="password" name="clave"><br>
      		</fieldset>
       		<input type="submit">
		</form>
	</body>
</html>