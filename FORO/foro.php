<!DOCTYPE html>
<html>
	<head>
		<title>Veterinarias</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="vetecss.css">

	</head>
	<body>
		<nav>
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="mapa.html">Mapa</a></li>
				<li><a href="forovet.php">Foro</a></li>
				<li><a href="veterinarias.html">Veterinarias</a></li>
				<li><a href="registro.html">Registrarse</a> </li>
				<li><a href="educa.html">Educación</a></li>
				<!--<form method="post" >
					<li><input type="submit" name="submitLogForm" value="Iniciar sesión"></li>
					<li><input type="pass" name="userpassword" placeholder="Clave"></li>
					<li><input type="text" name="username" placeholder="Nombre de usuario"></li>
				</form>-->
			</ul>
		</nav>
<?php
	include("conexionBD.php");
	if(isset($_GET["id"]))
	$id = $_GET['id'];
	$query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		
		echo "<tr><td>$titulo</tr></td>";
		echo "<table>";
		echo "<tr><td>autor: $autor</td></tr>";
		echo "<tr><td>$mensaje</td></tr>";
		echo "</table>";
		echo "<br /><br /><a href='formulario.php?id&respuestas=$respuestas&identificador=$id' style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'>Responder</a><br />";
	}
	
	$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC";
	$result2 = $mysqli->query($query2);
	echo "<br />respuestas:<br /><br />";
	while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		
		echo "<tr><td>$titulo</tr></td>";
		echo "<table>";
		echo "<tr><td>autor: $autor</td></tr>";
		echo "<tr><td>$mensaje</td></tr>";
		echo "</table>";
		echo "<br /><br /><a href='formulario.php?id&respuestas=$respuestas&identificador=$id' style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'>Responder</a><br />";
	}
?>

	</body>
</html>
