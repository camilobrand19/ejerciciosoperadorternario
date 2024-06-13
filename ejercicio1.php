<?php 
$camiseta = readline("ingrese la cantidad de camisas que desea: ");
$precio = readline ("ingrese el precio de la camiseta: ");

$camiseta >= 3 ? $descuento = 0.20 : $descuento = 0.10;
$total = $camiseta * $precio * (1 - $descuento);

echo "el total a pagar con descuento es: " , $total ;
?>