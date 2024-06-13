<?php 
$edad = readline("ingrese su edad: ");
echo ($edad >= 18) ? $licencia = readline("tienes licencia para conducir: ") == "si" ? "puedes conducir" : "debes obtener una licencia para conducir" : "no puedes conducir";
?>