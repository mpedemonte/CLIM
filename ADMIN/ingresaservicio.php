<?php
ob_start();
	include("conex.inc");
		$ID = $_GET["id"];
	    $servi = $_GET["serv"];
	
		$consulta = "INSERT INTO `servicios`(`id_veterinaria`, `servicio`) VALUES ($ID,'$servi')";
		$respuesta = mysqli_query($db, $consulta);
		header("Location: veterinariasadmin.php");
?>
