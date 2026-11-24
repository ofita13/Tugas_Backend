<?php
session_start();

if(isset($_POST['reset'])){
    $_SESSION['counter'] = 0;
}

if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 1;
}else{
    $_SESSION['counter']++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Counter Kunjungan</title>
</head>
<body>

<h2>Counter Kunjungan</h2>

<p>Anda mengunjungi halaman ini <?= $_SESSION['counter']; ?> kali</p>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
