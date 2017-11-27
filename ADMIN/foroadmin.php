<?php
session_start();
//Preguntamos si no esta conectado
if(empty($_SESSION["estado"]))
	header("Location: login.php?error=Debe+Conectarse");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Veterinarias</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="vetecss.css">
		<link rel="shortcut icon" href="icono.ico" />
	  <script>
      if (window.XMLHttpRequest) objAjax = new XMLHttpRequest() 
        else 
          if (window.ActiveXObject) objAjax = new ActiveXObject("Microsoft.XMLHTTP")
      
      function Elimina(id_foro){
        if (!confirm("¿Desea eliminar el resgistro "+id_foro+"?"))//OK=True Cancel=False
          return;
        url = "eliminaforo.php?id_foro="+id_foro;
        objAjax.open("GET",url)
        objAjax.send(null)
      
        objAjax.onreadystatechange = VerEliminar;
      }
  </script>

	</head>
	<body>
		<nav>
      <ul>
        <li><a href="indexadmin.html">Inicio</a></li>
        <li><a href="mapaadmin.php">Mapa</a></li>
        <li><a href="forovetadmin.php">Foro</a></li>
        <li><a href="rankingadmin.php">Votación</a></li>
        <li><a href="veterinariasadmin.php">Veterinarias</a></li>
        <li><a href="educaadmin.html">Educación</a></li>
        <li><a href="CerrarSesion.php">Cerrar Sesion</a></li>
        <!--<form method="post" >
          <li><input type="submit" name="submitLogForm" value="Iniciar sesión"></li>
          <li><input type="pass" name="userpassword" placeholder="Clave"></li>
          <li><input type="text" name="username" placeholder="Nombre de usuario"></li>
        </form>-->
      </ul>
    </nav>
<?php
	include("conex.inc");
	if(isset($_GET["id_foro"]))
	$id = $_GET['id_foro'];
	$consulta1 = "SELECT * FROM  foro WHERE id_foro = $id ORDER BY fecha DESC";
	$respuesta1 = mysqli_query($db, $consulta1);
	while($row = mysqli_fetch_object($respuesta1)){
		$consulta = "SELECT * FROM `usuarios` WHERE id_usuarios=$row->id_usuarios";
		$respuesta = mysqli_query($db, $consulta);
		$fila=mysqli_fetch_object($respuesta);
		$autor = $fila->usuario;
		$id = $row->id_foro;
		$titulo = $row->titulo;
		$mensaje = $row->mensaje;
		$fecha = $row->fecha;
		$respuestas = $row->respuestas;
		echo "<table border= '2' style='background-color: white; color:black;'>";
		echo "<tr><td>$titulo <span style='float:right'>$fecha</span></tr></td>";
		echo "<tr><td>autor: $autor</td></tr>";
		echo "<tr><td style=' width: 800px; height: 80px'>$mensaje</td></tr>";
		echo "<td><img src='trash.png' style='height:30px;width:30px;' onclick='Elimina($row->id_foro)'> </td>";
		echo "</table>";
		echo "<br /><br /><a href='formulariorespadmin.php?id&respuestas=$respuestas&identificador=$id' style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'>Responder</a><br />";
	}
	
	$consulta2 = "SELECT * FROM  foro WHERE identificador = $id ORDER BY fecha DESC";
	$respuesta2 = mysqli_query($db, $consulta2);
	echo "<br />respuestas:<br /><br />";
	while($row = mysqli_fetch_object($respuesta2)){
		$id = $row->id_foro;
		$consulta = "SELECT * FROM `usuarios` WHERE id_usuarios= $row->id_usuarios";
		$respuesta = mysqli_query($db, $consulta);
		$fila=mysqli_fetch_object($respuesta);
		$autor = $fila->usuario;
		$mensaje = $row->mensaje;
		$fecha = $row->fecha;
		$respuestas = $row->respuestas;
		echo "<table border= '2' style='background-color: white; color:black;'>";
		echo "<tr><td>autor: $autor<span style='float:right'>$fecha</span></td></tr>";
		echo "<tr><td style=' width: 800px; height: 80px'>$mensaje</td></tr>";
		echo "<td><img src='trash.png' style='height:30px;width:30px;' onclick='Elimina($row->id_foro)'> </td>";
		echo "</table>";
		//echo "<br /><br /><a href='formulario.php?id&respuestas=$respuestas&identificador=$id' style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'>Responder</a><br />";
	}
?>

	</body>
</html>