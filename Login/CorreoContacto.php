<?php
session_start();
ob_start();
//Preguntamos si no esta conectado
if(empty($_SESSION["estado"]))
	header("Location: login.php?error=Debe+Conectarse");
//Estoy dentro del sistema
	include("conex.inc");
	$user = $_SESSION["nombre"];
	$asunto = "Mensaje del usuario".$user;
	$mensaje = $_GET["message"];


	$consulta = "SELECT usuario, correo FROM usuarios WHERE  usuario='$user'";
	$respuesta = mysqli_query($db, $consulta);

	$fila=mysqli_fetch_object($respuesta);
	$correo= $fila->correo;	
	
	    $mail_para = "buscavete@gmail.com";
        $subject   = $asunto;
        $remite    = "buscavete@gmail.com";

        $header .="MIME-Version: 1.0\n"; 
        $header .= "Content-type: text/html; charset=iso-8859-1\n"; 
        $header .="From: Buscavet\n";
        $header .="Return-path: ". $remite."\n";
        $header .="X-Mailer: PHP/". phpversion()."\n";

        $message = '<html><body>';
        $message .= '<?php';
        $message .= 'echo';
        $message .= "<p>$mensaje</p><br>";
        $message .= '</body></html>';


        $mail = mail($mail_para, $subject, $message, $header);

        if ($mail) {
            echo "Su mail se a enviado correctamente";
            header("Location: solicitud.php?error=Su+mensaje+se+a+enviado+correctamente");
        }else{
            echo"no se envio";
            header("Location: solicitud.php?error=Su+mensaje+no+se+a+enviado+correctamente");
        }
        
?>
