<?php 
$articulo = readline(" cantidad de articulos comprados: ");
$valor = readline("precio de cada articulo: ");

$articulo >= 10 ? $descuento = 0.10 : $descuento = 0;
$total = $articulo * $valor * (1 - $descuento);

echo "total a pagar: ", $total;
?>