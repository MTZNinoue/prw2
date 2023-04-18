<?php

list($a, $b, $c) = array_map('intval', explode(' ', trim(fgets(STDIN))));


$menor = min($a, $b, $c);
$maior = max($a, $b, $c);
$meio = ($a + $b + $c) - $menor - $maior;


printf("%d\n%d\n%d\n\n", $menor, $meio, $maior);
echo "$a\n$b\n$c\n";
?>