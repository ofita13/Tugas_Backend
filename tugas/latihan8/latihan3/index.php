<?php
// Simpan tema
if(isset($_POST['tema'])){
    setcookie("tema", $_POST['tema'], time() + (30*24*60*60));
    header("Location: index.php");
    exit();
}

// Simpan nama
if(isset($_POST['nama'])){
    setcookie("nama", $_POST['nama'], time() + (30*24*60*60));
    header("Location: index.php");
    exit();
}

// Hapus cookie
if(isset($_GET['reset'])){
    setcookie("tema", "", time()-3600);
    setcookie("nama", "", time()-3600);
    header("Location: index.php");
    exit();
}

// Consent banner
if(isset($_POST['consent'])){
    setcookie("consent", "setuju", time() + (365*24*60*60));
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Cookie</title>
</head>
<body>

<h2>Pilihan Tema</h2>
<form method="post">
    <select name="tema">
        <option value="terang">Terang</option>
        <option value="gelap">Gelap</option>
    </select>
    <button type="submit">Simpan Tema</button>
</form>

<hr>

<h2>Nama Pengunjung</h2>
<form method="post">
    <input type="text" name="nama" placeholder="Masukkan nama">
    <button type="submit">Simpan Nama</button>
</form>

<?php
if(isset($_COOKIE['nama'])){
    echo "<p>Selamat datang kembali, "
         . htmlspecialchars($_COOKIE['nama'])
         . "</p>";
}
?>

<hr>

<a href="halaman.php">Buka Halaman Lain</a>
<br><br>

<a href="?reset=1">Reset Cookie</a>

<hr>

<?php if(!isset($_COOKIE['consent'])){ ?>
<div style="padding:10px;background:#ddd;">
    Website ini menggunakan cookie.
    <form method="post">
        <button type="submit" name="consent">Setuju</button>
    </form>
</div>
<?php } ?>

</body>
</html>