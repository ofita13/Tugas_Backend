<?php
session_start();

$_SESSION['nama'] = "Ofita";

echo "Session berhasil dibuat";
?>

<h2>cookie sesion</h2>
<h3>Nama : PHPSESSID <br>
Nilai : ud8uikb6hgv046tmifd06rl2c8 <br>
Expires : Session
</h3>

<h2>Menengah: Klasifikasi Data</h2>
<p>Tema gelap sebaiknya disimpan menggunakan cookie karena merupakan preferensi pengguna yang perlu tetap tersimpan meskipun browser ditutup dan dibuka kembali.<br>
Isi keranjang belanja lebih cocok disimpan dalam session karena bersifat sementara selama pengguna menggunakan aplikasi. <br>
Password harus disimpan dalam database agar dapat digunakan untuk proses autentikasi serta dikelola dengan lebih aman.<br>
Jumlah kunjungan dapat disimpan menggunakan cookie karena berkaitan dengan data pengguna pada browser. <br>
Sementara itu, role user lebih tepat disimpan dalam session karena digunakan untuk mengatur hak akses pengguna selama proses login berlangsung.</p>

<h2>Tantangan</h2>
<p>Isi keranjang belanja milik pengguna tamu sering hilang saat browser ditutup karena data tersebut biasanya disimpan dalam session. <br>
Session menggunakan cookie seperti PHPSESSID untuk mengenali pengguna. <br>
Ketika browser ditutup, session dapat berakhir sehingga data keranjang tidak lagi dapat diakses. <br>
Namun setelah pengguna login, data keranjang biasanya disimpan ke dalam database dan dikaitkan dengan akun pengguna. <br>
Dengan cara ini, meskipun browser ditutup atau pengguna keluar dari aplikasi, data keranjang tetap tersimpan dan dapat ditampilkan kembali saat pengguna login lagi. <br>
Oleh karena itu, session berfungsi sebagai penyimpanan sementara, sedangkan database berfungsi sebagai penyimpanan permanen.</p>
