<?php
	session_start();

	session_unset();
	session_destroy();
	//redirecciona al formulario de ingreso
	header("Location:loginranking.php");
?>
