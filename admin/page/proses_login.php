<?php
session_start();
include "../koneksi/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password']; // Harusnya di-hash

$sql = "SELECT * FROM tb_users WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['user_id'];
    header("Location: index.php");
} else {
    echo "Username atau password salah";
}
?>