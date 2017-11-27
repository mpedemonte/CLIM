<?php
	include("conex.inc");
	$ID = $_GET["id"];
	$name = $_GET["name"];

	$consulta = "UPDATE `veterinarias` SET `veterinaria`='$name' WHERE id_veterinaria=$ID";
	$respuesta = mysqli_query($db, $consulta); 
    header("Location: veterinariasadmin.php");
    
?>