<?php

list($a, $b, $c) = array_map('floatval', explode(' ', trim(fgets(STDIN))));


$delta = pow($b, 2) - 4 * $a * $c;


if ($delta < 0 || $a == 0) {
    echo "Impossivel calcular\n";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    printf("R1 = %.5f\nR2 = %.5f\n", $x1, $x2);
}
?>