<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SeyahatAcentesi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Formdan gelen verileri al
    $ad = $_POST['ad'];
    $yorum = $_POST['yorum'];
    $puan = $_POST['puan'];
    
    // Veritabanına ekleme işlemi
    $sql = "INSERT INTO Yorumlar (destinasyon_id, ad, yorum, puan)
    VALUES (1, :ad, :yorum, :puan)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ad', $ad);
    $stmt->bindParam(':yorum', $yorum);
    $stmt->bindParam(':puan', $puan);
    $stmt->execute();

    echo "Yorumunuz başarıyla eklendi.";
} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
$conn = null;
?>
