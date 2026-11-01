<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
</head>
<body>

    <h2>Tambah Data Buku</h2>

    <form action="proses.php" method="POST" enctype="multipart/form-data">

        <label>Judul Buku</label><br>
        <input type="text" name="judul" required><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" required>
        <br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun" min="1940" max="2026" required>
        <br><br>

        <label>Kategori</label><br>
        <select name="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Novel">Novel</option>
            <option value="Komik">Komik</option>
            <option value="Pendidikan">Pendidikan</option>
            <option value="Teknologi">Teknologi</option>
        </select>
        <br><br>

        
        <label>Cover Buku</label><br>
        <input type="file" name="cover" accept=".jpg,.jpeg,.png" required>
        <br><br>

        <button type="submit" name="simpan">
            Simpan
        </button>

        <button type="reset">
            Reset
        </button>

    </form>

</body>
</html>