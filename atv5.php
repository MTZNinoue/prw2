<?php 
    $a = readline();
    $b = readline();
    
    $m = ($a*3.5 + $b*7.5)/11;
    $m = number_format($m, 5,  ".", "");
    
    print("MEDIA = $m\n");
?>