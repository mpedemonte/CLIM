<?php
ob_start();
    include("conex.inc");
    $correo = $_GET["receptor"];
	$asunto = "Cambio de contraseña";


	$consulta = "SELECT correo FROM usuarios WHERE correo='$correo'";
	$respuesta = mysqli_query($db, $consulta);
    $fila=mysqli_fetch_object($respuesta);
    $cor= $fila->correo;
    if($correo == $cor){
        $mail_para = $correo;
        $subject   = $asunto;
        $remite    = "buscavete@gmail.com";

        $header .="MIME-Version: 1.0\n"; 
        $header .= "Content-type: text/html; charset=iso-8859-1\n"; 
        $header .="From: Buscavet\n";
        $header .="Return-path: ". $remite."\n";
        $header .="X-Mailer: PHP/". phpversion()."\n";

        $message = '<html><body>';
        $message .= '<p>Como olvido su contraseña actual, debera crear otra contraseña.</p><br>';
        $message .= '<?php';
        $message .= 'echo';
        $message .= "<p>Para crear su nueva contraseña haga click <a href='http://www.buscavet.tk/nuevacontra.php?correo=$correo'>Aqui</a></p>";
        $message .= '</body></html>';


        $mail = mail($mail_para, $subject, $message, $header);

        if ($mail) {
            echo "Su mail se a enviado correctamente";
            header("Location: index.html");
        }
    }else{
        header("Location: cambio.php?error=No+existe+este+correo");
    }
        
?>
