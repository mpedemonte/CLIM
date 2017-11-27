<?php
	include("conex.inc");
	$ID = $_GET["id"];
	$fono = $_GET["fono"];

	$consulta = "UPDATE `veterinarias` SET `contacto`='$fono' WHERE id_veterinaria=$ID";
	$respuesta = mysqli_query($db, $consulta); 
    header("Location: veterinariasadmin.php");
    
?>
