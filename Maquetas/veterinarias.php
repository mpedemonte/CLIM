<!DOCTYPE html>
<html>
	<head>
		<title>Veterinarias</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="veterinarias.css">
		<script src="jquery.min.js"></script>
		<script type="text/javascript" src="demo.js"></script>
	</head>
	<body>
		<nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="mapa.php">Mapa</a></li>
        <li><a href="forovet.php">Foro</a></li>
        <li><a href="ranking.php">Votación</a></li>
        <li><a href="veterinarias.php">Veterinarias</a></li>
        <li><a href="educa.html">Educación</a></li>
        <li><a href="solicitud.php">Contacto</a>
      </ul>
    </nav>
		<section>
				<h1>Veterinarias Temuco</h1>
				<table width="100%" height="450px" border="1" bordercolor="white" >
			<?php 
				include("conex.inc");
				$c=1;
				$p=0;
				$consulta = "SELECT * FROM  veterinarias";
				$respuesta = mysqli_query($db, $consulta);
				while($row = mysqli_fetch_object($respuesta)){
				    $id = $row->id_veterinaria;
					$vete = $row->veterinaria;
					$contacto = $row->contacto;
					$direc = $row->direccion;
					$serv = $row->Servicios;
					if($c%2==1){
					    echo"<tr>";
							echo"<td style='height:200px;width:50%'>";
								echo"<li><strong>".$vete."</strong></li>";
								echo"<p><strong>Contacto</strong>: ".$contacto."</p>";
									echo"<p><strong>Ubicación</strong>: ".$direc."</p>";
									$consulta1 = "SELECT * FROM  servicios WHERE id_veterinaria=$id";
				                    $respuesta1 = mysqli_query($db, $consulta1);
				                    echo "<p><strong>Servicios</strong>: "; 
				                    while($fila = mysqli_fetch_object($respuesta1)){
				                        $servi = $fila->servicio;
				                        if($p==0){
				                            echo"$servi";
				                            $p=$p+1;
				                        }else{
				                            echo" - $servi";
				                        }
				                    }
									echo"</p>";
									$p=0;
							echo"</td>";
					}
					if($c%2==0){
							echo"<td style='height:200px;width:50%'>";
								echo"<li><strong>".$vete."</strong></li>";
									echo"<p><strong>Contacto</strong>: ".$contacto."</p>";
									echo"<p><strong>Ubicación</strong>: ".$direc."</p>";
									$consulta1 = "SELECT * FROM  servicios WHERE id_veterinaria=$id";
				                    $respuesta1 = mysqli_query($db, $consulta1);
				                    echo "<p><strong>Servicios</strong>: "; 
				                    while($fila = mysqli_fetch_object($respuesta1)){
				                        $servi = $fila->servicio;
				                        if($p==0){
				                            echo"$servi";
				                            $p=$p+1;
				                        }else{
				                            echo" - $servi";
				                        }
				                    }
									echo"</p>";
									$p=0;
							echo"</td>";
					}
					$c=$c+1;
				}
			?>	
			</table>
			
		</section>
			
	</body>
</html>