<?php
ob_start();
	include("conex.inc");
	$usuario = $_GET["usuario"];
	$password = $_GET["password"]; 
	$asunto = "Bienvenido a BuscaVet";
	$correo = $_GET['receptor'];
	echo $correo;
	echo $usuario;

	$consulta = "SELECT usuario, correo FROM usuarios";
	$respuesta = mysqli_query($db, $consulta);
	$verificar_usuario = 0;

	while($fila=mysqli_fetch_object($respuesta)){
		if($fila->usuario == $usuario){
			$verificar_usuario =1;
		}
		if($fila->correo == $correo){
		    $verificar_usuario =2;
		}
	}
	
	    $mail_para = $correo;
        $subject   = $asunto;
        $remite    = "buscavete@gmail.com";

        $header .="MIME-Version: 1.0\n"; 
        $header .= "Content-type: text/html; charset=iso-8859-1\n"; 
        $header .="From: Buscavet\n";
        $header .="Return-path: ". $remite."\n";
        $header .="X-Mailer: PHP/". phpversion()."\n";

        $message = '<html><body>';
        $message .= '<p>Gracias por registrarse en BuscaVet, ahora puede interactuar en nuestro foro y votar por las veterinarias ubicadas en Temuco.</p><br>';
        $message .= '<?php';
        $message .= 'echo';
        $message .= "<p>Para completar su registro haga click <a href='http://www.buscavet.tk/ResgitroUsuario.php?usuario=$usuario&clave=$password&correo=$correo'>Aqui</a></p>";
        $message .= '</body></html>';

        $mail = mail($mail_para, $subject, $message, $header);

        if ($mail && $verificar_usuario == 0) {
            echo "Su mail se a enviado correctamente";
            header("Location: index.html");
        } else {
            header("Location: registrar.php?error=Este+usuario+ya+ha+sido+registrado+anteriormente");
        }
	
		
?>
