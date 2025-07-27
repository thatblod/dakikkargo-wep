<?php
session_start();

// Giriş yapılmamışsa login sayfasına yönlendir
if (!isset($_SESSION['kurye_giris'])) {
    header("Location: kurye-login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kurye Paneli</title>
</head>
<body>
    <h2>Merhaba, <?= htmlspecialchars($_SESSION['kurye_adi']) ?>!</h2>
    <p>Kurye paneline hoş geldiniz. Buradan zimmet, teslimat ve ödeme bilgilerinizi görebilirsiniz.</p>
    <a href="kurye-cikis.php">Çıkış Yap</a>
</body>
</html>
