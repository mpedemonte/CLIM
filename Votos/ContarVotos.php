<?php
  include("conex.inc");
 
  $consulta = "SELECT AVG(puntuacion) as puntos,id_veterinaria FROM puntuacion GROUP BY id_veterinaria";
  $respuesta = mysqli_query($db, $consulta);
  $salida = "[";
  while($fila = mysqli_fetch_object($respuesta)) {
    $punto = round($fila->puntos,1);
    $id = $fila->id_veterinaria;
    if($salida != "[") { //si no es el 1er registro
        $salida .= ",";
    }
    $salida .= '{"Puntos":"' .$punto. '","id":"'.$id.'"}';
  }
  $salida .= "]";
 
  echo $salida;
 
 
?>
