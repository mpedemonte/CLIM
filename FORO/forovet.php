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
<table width="620px" border="double">
	<tr>
		<td width="20px"></td>
		<td width="200px">Titulo</td>
		<td width="200px">Fecha</td>
		<td width="200px">Respuestas</td>
	</tr>
<?php 
	include("conexionBD.php");
	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		echo "<tr>";
			echo "<td><a href='foro.php?id=$id' style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'>ver</a></td>";
			echo "<td>$titulo</td>";
			echo "<td>".date("d-m-y,$fecha")."</td>";
			echo "<td>$respuestas</td>";
		echo "</tr>";
	}
?>
</table>
<a href="formulario.php" style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'> nuevo tema </a>

	</body>
</html>
