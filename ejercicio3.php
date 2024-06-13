<?php
$largo = readline("ingrese el largo del terreno: ");
$ancho = readline("ingrese el ancho del terreno: ");

$area = $largo * $ancho;
$mensaje = $area >= 1000 ? "el terreno es adecuado para cultivos extensivos" : "el terreno es adecuado para cultivos de jardin o huerto";
echo $mensaje
?>