<?php
// Kullanıcı adı ve şifreyi burada kontrol edin
$valid_username = "kullanici";
$valid_password = "sifre";

// Post verilerini alın
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifreyi doğrulayın
if ($username == $valid_username && $password == $valid_password) {
    // Giriş başarılı, ana sayfaya yönlendirin veya başka bir işlem yapın
    header("Location: ana_sayfa.php");
    exit;
} else {
    // Giriş başarısız, hata mesajı gösterin veya başka bir işlem yapın
    echo "Geçersiz kullanici adı veya şifre.";
}
?>