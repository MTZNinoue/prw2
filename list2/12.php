<?php

list($inicio, $fim) = array_map('intval', explode(' ', trim(fgets(STDIN))));


if ($inicio == $fim) {
    $duracao = 24;
} elseif ($inicio < $fim) {
    $duracao = $fim - $inicio;
} else {
    $duracao = 24 - $inicio + $fim;
}


echo "O JOGO DUROU {$duracao} HORA(S)\n";
?>