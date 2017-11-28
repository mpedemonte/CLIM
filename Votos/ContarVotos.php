<?php
  include("conex.inc");
 
  $consulta = "SELECT AVG(puntuacion) as puntos,id_veterinaria, veterinaria, lat, lng FROM puntuacion NATURAL JOIN veterinarias GROUP BY id_veterinaria";
  $respuesta = mysqli_query($db, $consulta);
  $salida = "[";
  while($fila = mysqli_fetch_object($respuesta)) {
    $punto = round($fila->puntos,1);
    $id = $fila->id_veterinaria;
    $vete = $fila->veterinaria;
    $lat = $fila->lat;
    $lng = $fila->lng;
    if($salida != "[") { //si no es el 1er registro
        $salida .= ",";
    }
    $salida .= '{"Puntos":"'.$punto.'","id":"'.$id.'","vete":"'.$vete.'","lat":'.$lat.',"lng":'.$lng.'}';
    
  }
  $salida .= "]";
 
  echo $salida;
 
 
?>
