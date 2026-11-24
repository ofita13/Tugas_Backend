<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users
          WHERE username='$username'
          AND password='$password'";

$result = $conn->query($query);

if($result->num_rows > 0){

    $users = $result->fetch_assoc();

    $_SESSION['username'] = $users['username'];
    $_SESSION['role'] = $users['role'];

    if($users['role'] == 'admin'){
        header("Location: admin.php");
    }
    elseif($users['role'] == 'editor'){
        header("Location: editor.php");
    }
    else{
        header("Location: beranda.php");
    }

} else {
    echo "Login gagal!";
}
?>