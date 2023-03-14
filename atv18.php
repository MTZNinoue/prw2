<?php

$valor = intval(fgets(STDIN));


$cedulas = [100, 50, 20, 10, 5, 2, 1];

echo "$valor\n";


foreach ($cedulas as $cedula) {
$quantidade = intval($valor / $cedula);
$valor %= $cedula;
echo "$quantidade nota(s) de R$ $cedula,00\n";
}
?>
