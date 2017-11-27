<?php
ob_start();
	include("conex.inc");
	$vetera = $_GET["name"];
	$contacto = $_GET["fono"]; 
	$ubica = $_GET['ubi'];
	$lat = $_GET["lat"];
	$lng = $_GET["lng"];
	
		$consulta = "INSERT INTO `veterinarias`(`veterinaria`, `contacto`, `direccion`, `lat`, `lng`) VALUES ('$vetera', $contacto, '$ubica', $lat, $lng )";
		$respuesta = mysqli_query($db, $consulta);
		
		$consulta1 = "SELECT id_veterinaria FROM veterinarias WHERE veterinaria='$vetera'";
		$respuesta1 = mysqli_query($db, $consulta1);
		$fila = mysqli_fetch_object($respuesta1);
		$id = $fila->id_veterinaria;
		echo $id;
		
		$consulta2 = "INSERT INTO `puntuacion`(`id_usuarios`, `id_veterinaria`, `puntuacion`) VALUES(5,$id,4)";
		$respuesta2 = mysqli_query($db, $consulta2);
		
		
		header("Location: veterinariasadmin.php");
?>
