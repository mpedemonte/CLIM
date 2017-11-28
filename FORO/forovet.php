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
<table width="620px" border="double">
	<tr>
		<td width="20px"></td>
		<td width="200px">Titulo</td>
		<td width="200px">Fecha</td>
		<td width="200px">Respuestas</td>
	</tr>
<?php 
	include("conex.inc");
	$consulta = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
	$respuesta = mysqli_query($db, $consulta);
	while($row = mysqli_fetch_object($respuesta)){
		$id = $row->id_foro;
		$titulo = $row->titulo;
		$fecha = $row->fecha;
		$respuestas = $row->respuestas;
		echo "<tr style='background-color: white; color:black;'>";
			echo "<td><a href='foro.php?id_foro=$id' style='font-size: 25px; color: black; background: white; :visited color: black; :hover background: white; :visited:hover color: white'>ver</a></td>";
			echo "<td>$titulo</td>";
			echo "<td>".date("$fecha")."</td>";
			echo "<td>$respuestas</td>";
		echo "</tr>";
	}
?>
</table>
<a href="formulario.php" style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'> nuevo tema </a>

	</body>
</html>
