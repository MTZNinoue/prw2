<?php

list($codigo, $quantidade) = array_map('intval', explode(' ', trim(fgets(STDIN))));


$tabela_precos = array(
    1 => 4.00,
    2 => 4.50,
    3 => 5.00,
    4 => 2.00,
    5 => 1.50
);


$preco_total = $tabela_precos[$codigo] * $quantidade;


printf("Total: R$ %.2f\n", $preco_total);
?>