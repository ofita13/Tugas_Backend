<?php
function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$jari = 7;
$hasil = hitungLuasLingkaran($jari);

echo "Luas lingkaran dengan jari-jari $jari adalah $hasil";
?>
