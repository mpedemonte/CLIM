<?php
session_start();
//Preguntamos si no esta conectado
if(empty($_SESSION["estado"]))
	header("Location: loginranking.php?error=Debe+Conectarse");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Veterinarias</title>
    <meta charset="utf-8">
    <meta name="keywords" content="jquery, ajax, plugin" />
    <link rel="stylesheet" type="text/css" href="rating.css" />
    <script src="jquery321.js"></script>
    <script type="text/javascript" src="js/rating.js"></script>
    <script type="text/javascript">
    $(document).ready(Principal);
    var arreglo=[];
    function Principal(){
        
        $.ajax({
        url: "ContarVotos.php",
        success: function(datos){
          arreglo = JSON.parse(datos)
          var i;
          for(i=0; i<arreglo.length;i++){
          var n = arreglo[i].id;  
          var salida ="<p>"+arreglo[i].Puntos+" </p>"
          var vete = "<p>"+arreglo[i].vete+" </p>"
          $('#prom'+n+'').html(salida);
          salida="";
          vete="";
        }
        for(i=1; i<arreglo.length+1;i++){
          $('#star'+i+'').rating('votar.php', {maxvalue: 7, curvalue:1, id:i});
        }
      }  
    })
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
   <table style="width:50%; text-align: center;margin-right: auto;margin-left: auto;margin-top: 10px">
        <tr>
        <th>Veterinaria</th>
        <th>voto</th> 
        <th>Promedio</th>
       </tr>
        <?php 
	            include("conex.inc");
	            $c=1;
	            $consulta = "SELECT * FROM  veterinarias";
	            $respuesta = mysqli_query($db, $consulta);
	            while($row = mysqli_fetch_object($respuesta)){
		            $vete = $row->veterinaria;
		            $id = $row->id_veterinaria;
		            echo"<tr>";
		            echo"<td>".$vete."</td>";
		            echo"<td><div id='star".$c."' class='rating'>&nbsp;</div></td>";
		            echo"<td id='prom".$id."'></td>";
		            echo"</tr>";
		            $c=$c+1;
	            }
		 ?>
        </table>
    </body>
</html>