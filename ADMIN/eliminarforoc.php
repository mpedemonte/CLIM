<?php
	include("conex.inc");
	$ID = $_GET["id_foro"];
	$consulta = "DELETE FROM foro WHERE id_foro=$ID";
	$respuesta = mysqli_query($db, $consulta);
    
    $consulta1 = "DELETE FROM foro WHERE identificador=$ID";
	$respuesta1 = mysqli_query($db, $consulta1);
	
	header("Location: forovetadmin.php");
?>