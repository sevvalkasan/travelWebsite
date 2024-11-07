<?php
// Admin oturumu kontrol et
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: admin-login.php'); // Oturum yoksa giriş sayfasına yönlendir
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
</head>
<body>
    <h1>Admin Paneli</h1>
    <p>Hoş geldiniz, Admin!</p>
    <a href="admin-logout.php">Çıkış Yap</a>
</body>
</html>
