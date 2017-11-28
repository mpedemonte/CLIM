<?php
session_start();
$user = $_SESSION["nombre"];
//Preguntamos si no esta conectado
if(empty($_SESSION["estado"]))
	header("Location: login.php?error=Debe+Conectarse");
//Estoy dentro del sistema

	include("conex.inc");

	$id = $_POST['id'];
	$voto = $_POST['rating'];

	$consulta = "SELECT `id_usuarios` FROM `usuarios` WHERE usuario='$user'";
	$respuesta = mysqli_query($db, $consulta);
	$fila=mysqli_fetch_object($respuesta);
	$id_autor = $fila->id_usuarios;

	$consulta1 = "INSERT INTO `puntuacion`(`id_usuarios`, `id_veterinaria`, `puntuacion`) VALUES ($id_autor,$id,$voto)";
	$respuesta = mysqli_query($db, $consulta1);

echo 'voto listo';
?>
