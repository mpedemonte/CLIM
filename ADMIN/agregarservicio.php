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
		<form  action="ingresaservicio.php" method="get">
			<fieldset>
				<legend>Datos veterinaria</legend>
				 <input type="hidden" name="id" value="<?php echo $ID ?>">
       			 Servicio <input type="text" name="serv"><br>
      		</fieldset>
       		<input type="submit">
		</form>
	</body>
</html>