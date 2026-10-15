<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);

    if ($nilaiAkhir >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "Nilai Akhir: " . round($nilaiAkhir) . "<br>";
    echo "Status: " . $status;
}
hitungNilaiAkhir(80, 75, 90);
?>
