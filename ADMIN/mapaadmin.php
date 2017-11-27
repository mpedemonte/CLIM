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
	<title>Mapas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="map.css">
  <link rel="shortcut icon" href="icono.ico" />
  <script src="jquery321.js"></script>
	<script>
        $(document).ready(Principal);
        var arreglo=[];
        function Principal(){
              $.ajax({
        url: "ContarVotos.php",
        success: function(datos){
          arreglo = JSON.parse(datos)
          }   
        })
        }
        
        function initMap(num) {
            for(j=0;j<arreglo.length;j++){
				document.getElementById("li"+j).style.backgroundColor = "orange";
			}	
			document.getElementById("li"+num).style.backgroundColor = "blue";
	        for(var i=0;i<=arreglo.length;i++){
			var temuco = {lat: arreglo[num].lat, lng: arreglo[num].lng};
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: temuco
            });
          var marker = new google.maps.Marker({
              position: temuco,
              map: map,
              title: 'Puntuacion: '+arreglo[num].Puntos+'✪'
            });
            
        }
      }
    </script>
    <script>
         if (window.XMLHttpRequest) objAjax = new XMLHttpRequest() 
        else 
          if (window.ActiveXObject) objAjax = new ActiveXObject("Microsoft.XMLHTTP")
          
          
      var nlat = 0;
      function EditarLatLng(id_veterinaria){
        if (!confirm("¿Desea editar el resgistro "+id_veterinaria+"?"))//OK=True Cancel=False
          return;  
        url = "editarlatlng.php?id_veterinaria="+id_veterinaria;
        objAjax.open("GET",url)
        objAjax.send(null)
        nlat=id_veterinaria;
        objAjax.onreadystatechange = VerEditarLatLng;
        
      }
      function VerEditarLatLng(){
        if(objAjax.readyState==4)
          document.getElementById("capa"+nlat).innerHTML = objAjax.responseText;
      }
    </script>
    <script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDm2rdxyxHE6elxzlwQ-d-e-qRMrLCw68&callback=initMap">
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
	    <div id="instrucciones">
	        <button><a href="mapa.php#popup" class="popup-link">Instrucciones</a></button>
										<div class="modal-wrapper" id="popup">
  											<div class="popup-contenedor">
      											<h3>Instrucciones:</h3>
		                                        <ul>
		                                            <li>Hacer Click en una veterinaria de la lista para ver su ubicación en el mapa</li>
		                                            <li>Para ver la valorización de la veterinaria seleccionada dejar el puntero del mouse arriba de marcador <img style="height: 20px; width:15px" src="marcador.png" alt="marcador"></li>
		                                             <li>La valorización va de un rango de 1✪ a 7✪ mientras mayor sea la cantidad de ✪ mejor valorada es la veterinaria </li>
		                                         </ul>
      											<a class="popup-cerrar" href="#">X</a>
   											</div>
										</div>
	    </div>
		<div id="menu">
			<h3 style="text-align: center">Lista de veterinarias</h3>
			<ul style="font-size:15px; list-style: none;height: 550px;width: 90%; overflow-y: auto;cursor: pointer; diplay:block">
			<?php 
	            include("conex.inc");
	            $c=0;
	            $consulta = "SELECT * FROM  veterinarias";
	            $respuesta = mysqli_query($db, $consulta);
	            while($row = mysqli_fetch_object($respuesta)){
	                $id = $row->id_veterinaria;
		            $vete = $row->veterinaria;
		            echo "<li id='li".$c."'onclick='initMap(".$c.")'>".$vete."<img src='editar.png' style='height:30px;width:30px;' onclick='EditarLatLng($id)'><div id='capa".$id."'></div></li>";
		            $c = $c + 1;
	            }
	       ?>
            				
			</ul>
		</div>
	    
	
		<div id="map">
		    <img style="height: 600px; width:800px" src="lupa.png" alt="marcador">
		</div>
	</section>
	
</body>
</html>