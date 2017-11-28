<?php
	include("conex.inc");
	$correo = $_GET["correo"];
	$clave = $_GET["clave"];

	$consulta = "UPDATE `usuarios` SET `clave`='$clave' WHERE correo='$correo'";
	$respuesta = mysqli_query($db, $consulta);
	
	header("Location: login.php");

?>