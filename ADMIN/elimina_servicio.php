<?php
	include("conex.inc");
	$ID = $_GET["id"];
	$servi = $_GET["serv"];
	$consulta = "DELETE FROM `servicios` WHERE id_veterinaria=$ID and servicio='$servi'";
	$respuesta = mysqli_query($db, $consulta);
	header("Location: veterinariasadmin.php");
	
?>
