<?php
$warna = "white";

if(isset($_COOKIE['tema'])){
    if($_COOKIE['tema'] == "gelap"){
        $warna = "black";
        $teks = "white";
    } else {
        $warna = "white";
        $teks = "black";
    }
} else {
    $teks = "black";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Tema</title>
</head>
<body style="background-color: <?= $warna ?>; color: <?= $teks ?>;">

<h1>Halaman Kedua</h1>

<?php
if(isset($_COOKIE['nama'])){
    echo "<p>Halo, "
        . htmlspecialchars($_COOKIE['nama'])
        . "</p>";
}
?>

<a href="index.php">Kembali</a>

</body>
</html>