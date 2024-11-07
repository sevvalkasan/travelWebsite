<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        label,
        input,
        button {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Girişi</h2>
        <form action="admin-login.php" method="POST">
            <label for="adminUsername">Kullanıcı Adı:</label>
            <input type="text" id="adminUsername" name="adminUsername" required>
            <label for="adminPassword">Şifre:</label>
            <input type="password" id="adminPassword" name="adminPassword" required>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>

    <?php
    // Kullanıcı adı ve şifreyi al
    $username = $_POST['adminUsername'];
    $password = $_POST['adminPassword'];

    // Örnek admin bilgileri
    $adminUsername = "admin";
    $adminPassword = "123456";

    // Giriş bilgilerini kontrol et
    if ($username == $adminUsername && $password == $adminPassword) {
        // Doğru giriş yapıldıysa oturum başlat
        session_start();
        $_SESSION['admin'] = true;
        header('Location: admin-panel.php'); // Admin paneline yönlendir
        exit();
    } else {
        echo "Hatalı kullanıcı adı veya şifre.";
    }
    ?>
</body>
</html>
