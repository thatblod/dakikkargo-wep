<?php
session_start();

// Sabit kullanıcı adı ve şifre (ileride veritabanına bağlanabilir)
$dogru_kullanici = "kurye1";
$dogru_sifre     = "123456";

// Formdan gelen değerleri alalım
$kullanici = isset($_POST['kullanici_adi']) ? trim($_POST['kullanici_adi']) : '';
$sifre     = isset($_POST['sifre']) ? trim($_POST['sifre']) : '';

// Bilgiler doğruysa giriş başarılı
if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    $_SESSION['kurye_giris'] = true;
    $_SESSION['kurye_adi'] = $kullanici;
    header("Location: kurye-panel.php");
    exit;
} else {
    // Giriş başarısızsa tekrar giriş ekranına yönlendir
    echo "<script>alert('Hatalı kullanıcı adı veya şifre!'); window.location.href='kurye-login.html';</script>";
    exit;
}
?>
