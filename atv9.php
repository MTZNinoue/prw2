<?php
$h = readline ();
$sf = readline ();
$tv = readline ();

$sf = number_format($sf, 2, ".", "");
$tv = number_format($tv, 2, ".", "");

$Sb = $tv * 0.15;
$Sb = number_format($Sb, 2, ".", "");

$St = $Sb + $sf;

$St = number_format($St, 2, ".", "");

echo "TOTAL = R$ $St\n";
?>