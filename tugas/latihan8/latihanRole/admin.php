<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['role'] != 'admin'){
    echo "Akses ditolak!";
    exit();
}
?>
<h1>Halaman Admin</h1>
<p>Selamat datang <?= $_SESSION['username']; ?></p>
<a href="logut.php">Logout</a>

