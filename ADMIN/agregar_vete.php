<!DOCTYPE>
<html>

	<head>
		<title>Editar veterinaria</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="vetecss.css">

	</head>
	<body>
		<br><h2>Agregar la veterinaria</h2>
		<form action="agregarvetera.php" method="get">
			<fieldset>
				<legend>Datos veterinaria</legend>
       			 Veterinaria <input type="text" id="name" name="name" required><br>
       			 Contacto <input type="tel" name="fono" required><br>
       			 Ubicación <input type="text" name="ubi" required><br>
       			 Latitud <input type="number" step="any" name="lat" required><br>
       			 Longuitud<input type="number" step="any" name="lng" required><br>
      		</fieldset>
       		<input type="submit">
       		
		</form>
	</body>
</html>