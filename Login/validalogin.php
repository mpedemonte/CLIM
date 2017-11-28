<?php
session_start();
include("conex.inc");
$usuario=$_POST["usuario"];
$password=$_POST["password"];

//Buscamos el usuario en la BD
$consulta = "SELECT `usuario`, `clave` FROM `usuarios` WHERE usuario='$usuario' AND clave='$password'";
$respuesta = mysqli_query($db, $consulta);

$fila=mysqli_fetch_object($respuesta);
if($fila->usuario == $usuario && $fila->clave == $password && $fila->usuario != "admin"){
	//Creamos las variables de sesion
	$_SESSION["estado"] = "conectado";
	$_SESSION["nombre"] = $usuario;
	// Lo redireccionamos al menu del sistema
	header("Location: forovet.php");	
}
if($fila->usuario == "admin" && $fila->clave == "adminbuscavet") {
	$_SESSION["estado"] = "conectado";
	$_SESSION["nombre"] = "admin";

	header("Location: forovetadmin.php");
}
if($fila->usuario != $usuario || $fila->clave != $password) {
	header("Location: login.php?error=Usuario+o+Clave+erroneas");
}


?>