<?php

require 'buku.php';

$buku = new Buku();

$buku->judul = $_POST['judul'];
$buku->penulis = $_POST['penulis'];
$buku->tahun = $_POST['tahun'];
$buku->kategori = $_POST['kategori'];
$buku->cover = $_FILES['cover']['name'];

if(!is_numeric($buku->tahun))
{
    die("Tahun harus angka");
}

$buku->tambah();
?>