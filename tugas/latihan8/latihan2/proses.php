<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "123"){
    echo "Login Berhasil";
}else{
    $_SESSION['flash'] = "Username atau Password salah!";
    header("Location: login.php");
    exit();
}
?>