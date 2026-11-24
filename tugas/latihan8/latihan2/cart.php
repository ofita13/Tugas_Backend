<?php
session_start();

$produk = [
    1 => ["nama" => "Laptop", "harga" => 5000000],
    2 => ["nama" => "Mouse", "harga" => 100000],
    3 => ["nama" => "Keyboard", "harga" => 200000]
];

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

if(isset($_POST['produk'])){
    $id = $_POST['produk'];

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]++;
    }else{
        $_SESSION['cart'][$id] = 1;
    }
}

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>

<h2>Tambah Produk</h2>

<form method="post">
    <select name="produk">
        <option value="1">Laptop</option>
        <option value="2">Mouse</option>
        <option value="3">Keyboard</option>
    </select>
    <button type="submit">Tambah</button>
</form>

<h2>Isi Keranjang</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Subtotal</th>
    </tr>

<?php
foreach($_SESSION['cart'] as $id => $jumlah){
    $nama = $produk[$id]['nama'];
    $harga = $produk[$id]['harga'];
    $subtotal = $harga * $jumlah;
    $total += $subtotal;

    echo "<tr>
            <td>$nama</td>
            <td>$jumlah</td>
            <td>Rp $harga</td>
            <td>Rp $subtotal</td>
          </tr>";
}
?>

<tr>
    <td colspan="3"><b>Total</b></td>
    <td><b>Rp <?= $total; ?></b></td>
</tr>
</table>

</body>
</html>