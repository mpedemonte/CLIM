<?php
	include("conex.inc");
	$ID = $_GET["id_foro"];
	$consulta = "DELETE FROM foro WHERE id_foro=$ID";
	$respuesta = mysqli_query($db, $consulta);

?>
