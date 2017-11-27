<?php
	include("conex.inc");
	$ID = $_GET["id"];
	$lat = $_GET["lat"];
	$lng = $_GET["lng"];

	$consulta = "UPDATE `veterinarias` SET `lat`=$lat , `lng`=$lng WHERE id_veterinaria=$ID";
	$respuesta = mysqli_query($db, $consulta);
    
    header("Location: mapaadmin.php");
    
?>