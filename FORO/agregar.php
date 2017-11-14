<?php
	session_start();
	$user = $_SESSION["nombre"];
	//Preguntamos si no esta conectado
	if($_SESSION["estado"] != "conectado")
	header("Location: login.php?error=Debe+Conectarse");
	
	include("conex.inc");
	
	if(isset($_POST["submit"])){
		if(!empty($_POST['mensaje'])){
			$titulo=$_POST['titulo'];
			$mensaje=$_POST['mensaje'];
			$respuestas=$_POST['respuestas'];
			$identificador=$_POST['identificador'];
			$fecha = date("d-m-y");
			
			
			//Evitamos que el usuario ingrese HTML
			$mensaje = htmlentities($mensaje);
			echo "identificador:";
			echo $identificador;
			
			$consulta = "SELECT `id_usuarios` FROM `usuarios` WHERE usuario='$user'";
			$respuesta = mysqli_query($db, $consulta);
			$fila=mysqli_fetch_object($respuesta);
			$id_autor = $fila->id_usuarios;

			//Grabamos el mensaje en la base de datos.
			$consulta = "INSERT INTO foro (titulo, mensaje, identificador, fecha, ult_respuesta,id_usuarios) VALUES ('$titulo', '$mensaje', '$identificador','$fecha','$fecha','$id_autor')";
			
			//echo $query;
			echo "identificador:";
			echo $identificador;
			$respuesta = mysqli_query($db, $consulta);
			
			/* si es un mensaje en respuesta a otro actualizamos los datos */
			if ($identificador != 0)
			{
				$consulta2 = "UPDATE foro SET respuestas=respuestas+1 WHERE id_foro='$identificador'";
				$respuesta2 = mysqli_query($db, $consulta2);
				//echo $query2;
				Header("Location: foro.php?id_foro=$identificador");
				exit();
			}
			Header("Location: forovet.php");
		}
	}
?>