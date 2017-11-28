<?php
ob_start();
	include("conex.inc");
	$usuario = $_GET["usuario"];
	$password = $_GET["clave"]; 
	$correo = $_GET['correo'];
		$consulta = "INSERT INTO `usuarios`(`usuario`, `clave` ,`correo`) VALUES ('$usuario','$password','$correo')";
		$respuesta = mysqli_query($db, $consulta);
		header("Location: index.html");
?>
