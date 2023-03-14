<?php
$pi = 3.14159;
$R = floatval(readline());

$volume = (4/3) * $pi * pow($R, 3);

echo "VOLUME = " . number_format($volume, 3, '.', '') . "\n";
?>