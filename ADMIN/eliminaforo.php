<?php
	include("conex.inc");
	$ID = $_GET["id_foro"];
	
	$consulta2="SELECT identificador FROM foro WHERE id_foro=$ID";
	$respuesta2 = mysqli_query($db, $consulta2);
	$fila = mysqli_fetch_object($respuesta2);
	$iden = $fila->identificador;
	
	$consulta3="SELECT * FROM foro WHERE id_foro=$iden";
	$respuesta3 = mysqli_query($db, $consulta3);
	$row = mysqli_fetch_object($respuesta3);
	$res = $row->respuestas;
	$res=$res-1;
	
	$consulta1="UPDATE `foro` SET `respuestas`= $res  WHERE id_foro=$iden";
	$respuesta1 = mysqli_query($db, $consulta1);
	
	$consulta = "DELETE FROM foro WHERE id_foro=$ID";
	$respuesta = mysqli_query($db, $consulta);

    header("Location: foroadmin.php");
?>