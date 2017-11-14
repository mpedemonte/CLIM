<?php
  session_start();

  //Preguntamos si no esta conectado
  if($_SESSION["estado"] != "conectado")
  header("Location: loginranking.php?error=Debe+Conectarse");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Veterinarias</title>
    <meta charset="utf-8">
    <meta name="description" content="Demo del star rating plugin para jquery modificado por miguel manchego" />
    <meta name="keywords" content="jquery, ajax, plugin" />
    <link rel="stylesheet" type="text/css" href="css/rating.css" />
    <link rel="shortcut icon" href="icono.ico" />
    <script src="jquery321.js"></script>
    <script type="text/javascript" src="js/rating.js"></script>
    <script type="text/javascript">
    $(document).ready(Principal);
    function Principal(){
        for(i=1; i<34;i++){
          $('#star'+i+'').rating('votar.php', {maxvalue: 5, curvalue:1, id:i});
        }
        $.ajax({
        url: "ContarVotos.php",
        success: function(datos){
          arreglo = JSON.parse(datos)
          var i;
          for(i=0; i<arreglo.length;i++){
          var n = arreglo[i].id;  
          var salida ="<p>"+arreglo[i].Puntos+" </p>"
          $('#prom'+n+'').html(salida);    
          salida="";         
        }   
      }  

    })
    }
    </script>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="mapa.html">Mapa</a></li>
        <li><a href="forovet.php">Foro</a></li>
        <li><a href="ranking.php">Votación</a></li>
        <li><a href="veterinarias.html">Veterinarias</a></li>
        <li><a href="educa.html">Educación</a></li>
        <li><a href="CerrarSesionranking.php">Cerrar Sesion</a></li>
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
       <tr>
        <td>Clínica Veterinaria Altamira</td>
        <td><div id="star1" class="rating">&nbsp;</div></td> 
        <td id="prom1"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Arca de Noé</td>
        <td><div id="star2" class="rating">&nbsp;</div></td> 
        <td id="prom2"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Edén</td>
        <td><div id="star3" class="rating">&nbsp;</div></td> 
        <td id="prom3"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria El Carmen</td>
        <td><div id="star4" class="rating">&nbsp;</div></td> 
        <td id="prom4"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Kennel</td>
        <td><div id="star5" class="rating">&nbsp;</div></td> 
        <td id="prom5"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Los Castaños</td>
        <td><div id="star6" class="rating">&nbsp;</div></td> 
        <td id="prom6"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Recabarren - Barros Arana</td>
        <td><div id="star7" class="rating">&nbsp;</div></td> 
        <td id="prom7"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Recabarren - Pedro de Valdivia</td>
        <td><div id="star8" class="rating">&nbsp;</div></td> 
        <td id="prom8"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Recabarren - Recabarren</td>
        <td><div id="star9" class="rating">&nbsp;</div></td> 
        <td id="prom9"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Temuco</td>
        <td><div id="star10" class="rating">&nbsp;</div></td> 
        <td id="prom10"></td>
       </tr>
       <tr>
        <td>El Portal de las Mascotas</td>
        <td><div id="star11" class="rating">&nbsp;</div></td> 
        <td id="prom11"></td>
       </tr>
       <tr>
        <td>Hospital Veterinario - UCT</td>
        <td><div id="star12" class="rating">&nbsp;</div></td> 
        <td id="prom12"></td>
       </tr>
       <tr>
        <td>Hospital Veterinario - UST</td>
        <td><div id="star13" class="rating">&nbsp;</div></td> 
        <td id="prom13"></td>
       </tr>
       <tr>
        <td>Instituto Quirúrgico Veterinario</td>
        <td><div id="star14" class="rating">&nbsp;</div></td> 
        <td id="prom14"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Alma</td>
        <td><div id="star15" class="rating">&nbsp;</div></td> 
        <td id="prom15"></td>
       </tr>
       <tr>
        <td>Veterinaria Rodríguez</td>
        <td><div id="star16" class="rating">&nbsp;</div></td> 
        <td id="prom16"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Vidapet</td>
        <td><div id="star17" class="rating">&nbsp;</div></td> 
        <td id="prom17"></td>
       </tr>
       <tr>
        <td>Pet Boutique Alemania</td>
        <td><div id="star18" class="rating">&nbsp;</div></td> 
        <td id="prom18"></td>
       </tr>
       <tr>
        <td>Veterinaria Andes</td>
        <td><div id="star19" class="rating">&nbsp;</div></td> 
        <td id="prom19"></td>
       </tr>
       <tr>
        <td>Veterinaria Animalia</td>
        <td><div id="star20" class="rating">&nbsp;</div></td> 
        <td id="prom20"></td>
       </tr>
       <tr>
        <td>Veterinaria Citydog</td>
        <td><div id="star21" class="rating">&nbsp;</div></td> 
        <td id="prom21"></td>
       </tr>
       <tr>
        <td>Veterinaria Lemantú</td>
        <td><div id="star22" class="rating">&nbsp;</div></td> 
        <td id="prom22"></td>
       </tr>
       <tr>
        <td>Veterinaria Malen</td>
        <td><div id="star23" class="rating">&nbsp;</div></td> 
        <td id="prom23"></td>
       </tr>
       <tr>
        <td>Veterinaria Mascotas</td>
        <td><div id="star24" class="rating">&nbsp;</div></td> 
        <td id="prom24"></td>
       </tr>
       <tr>
        <td>Veterinaria Municipal</td>
        <td><div id="star25" class="rating">&nbsp;</div></td> 
        <td id="prom25"></td>
       </tr>
       <tr>
        <td>Veterinaria Ñielol</td>
        <td><div id="star26" class="rating">&nbsp;</div></td> 
        <td id="prom26"></td>
       </tr>
       <tr>
        <td>Veterinaria Peumayen</td>
        <td><div id="star27" class="rating">&nbsp;</div></td> 
        <td id="prom27"></td>
       </tr>
       <tr>
        <td>Veterinaria San Francisco de Asís</td>
        <td><div id="star28" class="rating">&nbsp;</div></td> 
        <td id="prom28"></td>
       </tr>
       <tr>
        <td>Veterinaria San Sebastián</td>
        <td><div id="star29" class="rating">&nbsp;</div></td> 
        <td id="prom29"></td>
       </tr>
       <tr>
        <td>Veterinaria Sevilla</td>
        <td><div id="star30" class="rating">&nbsp;</div></td> 
        <td id="prom30"></td>
       </tr>
       <tr>
        <td>Vetpharma</td>
        <td><div id="star31" class="rating">&nbsp;</div></td> 
        <td id="prom31"></td>
       </tr>
       <tr>
        <td>Clínica Veterinaria Exonupets</td>
        <td><div id="star32" class="rating">&nbsp;</div></td> 
        <td id="prom32"></td>
       </tr>
       <tr>
        <td>Veterinaria Dr. Pablo Iglesias</td>
        <td><div id="star33" class="rating">&nbsp;</div></td> 
        <td id="prom33"></td>
       </tr>

  </table>
    </body>
</html>
