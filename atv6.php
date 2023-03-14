<?php
    $a = readline();
    $b = readline();
    $c = readline();
    
    $m = ($a*2 + $b*3 + $c*5)/10;
    $m = number_format($m, 1, ".", "");
    echo "MEDIA = $m\n";
?>