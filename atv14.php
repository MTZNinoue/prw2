<?php

$x = (int)readline();
$y = (float)readline();

$consumo_medio = $x / $y;

echo number_format($consumo_medio, 3, '.', '') . " km/l\n";
?>