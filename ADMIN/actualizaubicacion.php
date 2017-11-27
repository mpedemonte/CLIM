<?php
	include("conex.inc");
	$ID = $_GET["id"];
	$ubi = $_GET["ubi"];

	$consulta = "UPDATE `veterinarias` SET `direccion`='$ubi' WHERE id_veterinaria=$ID";
	$respuesta = mysqli_query($db, $consulta); 
    header("Location: veterinariasadmin.php");
    
?>