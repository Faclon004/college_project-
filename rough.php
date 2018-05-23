<?php
$chumma = "12345";
$count = strlen($chumma);
$period = $chumma[0];
for($i = 1; $i <$count;$i++)
$period .= "," . $chumma[$i];
echo "\n$period";

 ?>
