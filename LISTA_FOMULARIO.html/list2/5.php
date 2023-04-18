<?php

list($n1, $n2, $n3, $n4) = array_map('floatval', explode(' ', trim(fgets(STDIN))));


$media = ($n1 * 2 + $n2 * 3 + $n3 * 4 + $n4) / 10;


printf("Media: %.1f\n", $media);


if ($media >= 7.0) {
    echo "Aluno aprovado.\n";
} elseif ($media >= 5.0 && $media <= 6.9) {
    echo "Aluno em exame.\n";

    $exame = floatval(trim(fgets(STDIN)));
  
    printf("Nota do exame: %.1f\n", $exame);

    $media_final = ($media + $exame) / 2;
 
    if ($media_final >= 5.0) {
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }

    printf("Media final: %.1f\n", $media_final);
} else {
    echo "Aluno reprovado.\n";
}
?>