<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php
if(isset($_SESSION['flash'])){
    echo "<p style='color:red'>" . $_SESSION['flash'] . "</p>";
    unset($_SESSION['flash']);
}
?>

<form action="proses.php" method="post">
    Username :
    <input type="text" name="username"><br><br>

    Password :
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>