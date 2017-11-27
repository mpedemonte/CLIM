<?php
	include("conex.inc");
		$ID = $_GET["id_veterinaria"];
?>
<!DOCTYPE>
<html>

	<head>
		<title>Editar veterinaria</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form  action="actualizaubicacion.php" method="get">
			<fieldset>
				<legend>Datos veterinaria</legend>
				 <input type="hidden" name="id" value="<?php echo $ID ?>">
       			 Ubicación <input type="text" name="ubi"><br>
      		</fieldset>
       		<input type="submit">
		</form>
	</body>
</html>