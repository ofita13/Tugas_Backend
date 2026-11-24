<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['role'] != 'editor'){
    echo "Akses ditolak!";
    exit();
}
?>

<h1>Halaman Editor</h1>
<p>Selamat datang <?= $_SESSION['username']; ?></p>
<a href="logut.php">Logout</a>