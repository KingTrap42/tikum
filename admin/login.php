<?php
session_start(); // Memulai sesi
if (isset($_SESSION['user_id'])) { // Memeriksa apakah pengguna sudah login
    header('Location: index.php'); // Mengarahkan ke halaman utama jika sudah login
    exit(); // Menghentikan eksekusi script
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="proses_login.php" method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>