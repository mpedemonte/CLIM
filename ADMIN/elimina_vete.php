<?php
	include("conex.inc");
	$ID = $_GET["id_veterinaria"];
	$consulta = "DELETE FROM puntuacion WHERE id_veterinaria=$ID";
	$respuesta = mysqli_query($db, $consulta);
	
	$consulta1 = "DELETE FROM servicios WHERE id_veterinaria=$ID";
	$respuesta1 = mysqli_query($db, $consulta1);
	
	$consulta2 = "DELETE FROM veterinarias WHERE id_veterinaria=$ID";
	$respuesta2 = mysqli_query($db, $consulta2);
	

?>

