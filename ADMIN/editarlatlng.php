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
		<form action="actualizalatlng.php" method="get">
		      <input type="hidden" name="id" value="<?php echo $ID ?>">
       			 Latitud <input type="number" step="any" name="lat" required>
       			 Longuitud<input type="number" step="any" name="lng" required>
       		    <input type="submit">
		</form>
	</body>