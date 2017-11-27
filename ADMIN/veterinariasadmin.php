<?php
session_start();
//Preguntamos si no esta conectado
if(empty($_SESSION["estado"]))
	header("Location: login.php?error=Debe+Conectarse");
//Estoy dentro del sistema
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Veterinarias</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="veterinarias.css">
		<script>
      if (window.XMLHttpRequest) objAjax = new XMLHttpRequest() 
        else 
          if (window.ActiveXObject) objAjax = new ActiveXObject("Microsoft.XMLHTTP")
      
      function Elimina(id_veterinaria){
        if (!confirm("¿Desea eliminar el resgistro "+id_veterinaria+"?"))//OK=True Cancel=False
          return;
        url = "elimina_vete.php?id_veterinaria="+id_veterinaria;
        objAjax.open("GET",url)
        objAjax.send(null)
      
        objAjax.onreadystatechange = VerEliminar;
      }
      var ncontacto = 0;
      function EditarContacto(id_veterinaria){
        if (!confirm("¿Desea editar el resgistro "+id_veterinaria+"?"))//OK=True Cancel=False
          return;  
        url = "editarcontacto.php?id_veterinaria="+id_veterinaria;
        objAjax.open("GET",url)
        objAjax.send(null)
        ncontacto=id_veterinaria;
        objAjax.onreadystatechange = VerEditarContacto;
        
      }
      function VerEditarContacto(){
        if(objAjax.readyState==4)
          document.getElementById("capa"+ncontacto).innerHTML = objAjax.responseText;
      }
      var nubica = 0;
      function EditarUbicacion(id_veterinaria){
        if (!confirm("¿Desea editar el resgistro "+id_veterinaria+"?"))//OK=True Cancel=False
          return;  
        url = "editarubicacion.php?id_veterinaria="+id_veterinaria;
        objAjax.open("GET",url)
        objAjax.send(null)
        nubica=id_veterinaria;
        objAjax.onreadystatechange = VerEditarUbicacion;
        
      }
      function VerEditarUbicacion(){
        if(objAjax.readyState==4)
          document.getElementById("capa"+nubica).innerHTML = objAjax.responseText;
      }
      var nvete = 0;
      function EditarNombre(id_veterinaria){
        if (!confirm("¿Desea editar el resgistro "+id_veterinaria+"?"))//OK=True Cancel=False
          return;  
        url = "editarnombre.php?id_veterinaria="+id_veterinaria;
        objAjax.open("GET",url)
        objAjax.send(null)
        nvete=id_veterinaria;
        objAjax.onreadystatechange = VerEditarNombre;
        
      }
      function VerEditarNombre(){
        if(objAjax.readyState==4)
          document.getElementById("capa"+nvete).innerHTML = objAjax.responseText;
      }
      var nservi = 0;
      function AgregarServicio(id_veterinaria){
        if (!confirm("¿Desea editar el resgistro "+id_veterinaria+"?"))//OK=True Cancel=False
          return;  
        url = "agregarservicio.php?id_veterinaria="+id_veterinaria;
        objAjax.open("GET",url)
        objAjax.send(null)
        nservi=id_veterinaria;
        objAjax.onreadystatechange = VerEditarServicio;
        
      }
      function VerEditarServicio(){
        if(objAjax.readyState==4)
          document.getElementById("capa"+nservi).innerHTML = objAjax.responseText;
      }
       var nserv = 0;
      function BorrarServicio(id_veterinaria){
        if (!confirm("¿Desea editar el resgistro "+id_veterinaria+"?"))//OK=True Cancel=False
          return;  
        url = "borrarservicio.php?id_veterinaria="+id_veterinaria;
        objAjax.open("GET",url)
        objAjax.send(null)
        nserv=id_veterinaria;
        objAjax.onreadystatechange = VerEditarServic;
        
      }
      function VerEditarServic(){
        if(objAjax.readyState==4)
          document.getElementById("capa"+nserv).innerHTML = objAjax.responseText;
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
      </ul>
    </nav>
		<section>
				<h1>Veterinarias Temuco</h1> <a href="agregar_vete.php" style='color: white; background: #336699; :visited color: white; :hover background: #336699; :visited:hover color: white'> agregar nueva veterinaria </a>
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
								echo"<li><strong>".$vete."</strong><img src='editar.png' style='height:30px;width:30px;' onclick='EditarNombre($row->id_veterinaria)'><img src='trash.png' style='height:30px;width:30px;float:right' onclick='Elimina($row->id_veterinaria)'></li>";
								    echo"<p><strong>Contacto</strong>: ".$contacto."<img src='editar.png' style='height:30px;width:30px;' onclick='EditarContacto($row->id_veterinaria)'></p>";
									echo"<p><strong>Ubicación</strong>: ".$direc."<img src='editar.png' style='height:30px;width:30px;' onclick='EditarUbicacion($row->id_veterinaria)'></p>";
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
									$p=0;
									echo "<img src='trash.png' style='height:30px;width:30px;' onclick='BorrarServicio($row->id_veterinaria)'><img src='agregar.png' style='height:30px;width:30px;' onclick='AgregarServicio($row->id_veterinaria)'>";
									echo "<div id='capa".$id."'></div>";
							echo"</td>";
					}
					if($c%2==0){
							echo"<td style='height:200px;width:50%'>";
								echo"<li><strong>".$vete."</strong><img src='editar.png' style='height:30px;width:30px;' onclick='EditarNombre($row->id_veterinaria)'><img src='trash.png' style='height:30px;width:30px;float:right' onclick='Elimina($row->id_veterinaria)'></li>";
									echo"<p><strong>Contacto</strong>: ".$contacto."<img src='editar.png' style='height:30px;width:30px;' onclick='EditarContacto($row->id_veterinaria)'></p>";
									echo"<p><strong>Ubicación</strong>: ".$direc."<img src='editar.png' style='height:30px;width:30px;' onclick='EditarUbicacion($row->id_veterinaria)'></p>";
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
									$p=0;
									echo "<img src='trash.png' style='height:30px;width:30px;' onclick='BorrarServicio($row->id_veterinaria)'><img src='agregar.png' style='height:30px;width:30px;' onclick='AgregarServicio($row->id_veterinaria)'>";
									echo "<div id='capa".$id."'></div>";
							echo"</td>";
					}
					$c=$c+1;
				}
			?>	
			</table>
			
		</section>
	 <div id="capa1"></div>		
	</body>
</html>