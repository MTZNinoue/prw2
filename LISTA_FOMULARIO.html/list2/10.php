<?php

list($a, $b, $c) = array_map('floatval', explode(' ', trim(fgets(STDIN))));


$arr = [$a, $b, $c];
rsort($arr);


list($a, $b, $c) = $arr;


if ($a >= $b + $c) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    if ($a ** 2 == $b ** 2 + $c ** 2) {
        echo "TRIANGULO RETANGULO\n";
    }
    if ($a ** 2 > $b ** 2 + $c ** 2) {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    if ($a ** 2 < $b ** 2 + $c ** 2) {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if ($a == $b && $b == $c) {
        echo "TRIANGULO EQUILATERO\n";
    }
    if (($a == $b && $a != $c) || ($a == $c && $a != $b) || ($b == $c && $b != $a)) {
        echo "TRIANGULO ISOSCELES\n";
    }
}
?>