<?php
$x = 5;
$y = "5";

echo "Nilai sama: ";
var_export($x == $y );
echo "<br>";

echo "\nNilai identik: ";
var_export($x === $y);
echo "<br>";

echo "\nLebih besar: ";
var_export($x > $y);
echo "<br>";

echo "\nLebih kecil: ";
var_export($x < $y);
?>