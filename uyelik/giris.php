<?php

// sql bağlantısını kurar
include("baglanti2.php");

// veri tabanına yeni kullanıcı ekler
if (isset($_POST["kaydet"])) {

    $name = $_POST["kullaniciadi"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Şifrenin en az 6 karakter olup olmadığını kontrol et
    if (strlen($password) < 6) {
        echo '<div class="alert alert-danger" role="alert">
    Şifre en az 6 karakter olmalıdır.
    </div>';
    } else {
        $ekle ="INSERT INTO kullanicilar (ad,email,pass) VALUES ('$name','$email','$password')";
        $calistirekle = mysqli_query($baglanti2, $ekle);

        if ($calistirekle) {
            echo '<div class="alert alert-success" role="alert">
  Kayıt başarılı bir şekilde tamamlandı.
  </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
    Kayıt başarılı bir şekilde tamamlanamadı.
    </div>';
        }
    }
   
}
mysqli_close($baglanti2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPPLEMENT</title>
    <!-- CSS dosyalarını ekler -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- BOX ICONS kütüphanesini ekler -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Giriş ve kayıt formunu içeren ana div -->
    <div class="login">
        <div class="login__content">
            <!-- Giriş ve kayıt formunu içeren div -->
            <div class="login__forms">
                <!-- Giriş formu -->
                <form action="login.php" class="login__registre" id="login-in" method="POST">
                    <h1 class="login__title">Giriş Yap</h1>
                    <!-- Kullanıcı adı giriş kutusu -->
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Kullanıcı adı" class="login__input" name="kullaniciadi">
                    </div>
                    <!-- Şifre giriş kutusu -->
                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Şifre" class="login__input" name="parola">
                    </div>
                    <!-- Şifremi Unuttum bağlantısı -->
                    <a href="sifre.php" class="login__forgot">Şifremi Unuttum</a>
                    <!-- Giriş Yap butonu -->
                    <button href="#" class="login__button">Giriş Yap</button>
                    <!-- Hesap oluşturma bağlantısı -->
                    <div>
                        <span class="login__account">Hesabınız yok mu ?</span>
                        <span class="login__signin" id="sign-up">Kayıt ol</span>
                    </div>
                </form>
                <!-- Kayıt formu -->
                <form action="giris.php" class="login__create none" id="login-up" method="POST">
                    <h1 class="login__title">Hesap Oluştur</h1>
                    <!-- Kullanıcı adı giriş kutusu -->
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Kullanıcı adı" name="kullaniciadi" class="login__input">
                    </div>
                    <!-- Email giriş kutusu -->
                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="email" placeholder="Email" name="email" class="login__input">
                    </div>
                    <!-- Şifre giriş kutusu -->
                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" name="pass" placeholder="Şifre" class="login__input">
                    </div>
                    <!-- Kayıt Ol butonu -->
                    <button class="login__button" name="kaydet">Kayıt Ol</button>
                    <!-- Giriş yap bağlantısı -->
                    <div>
                        <span class="login__account">Zaten bir hesabınız var mı ?</span>
                        <span class="login__signup" id="sign-in">Giriş Yap</span>
                    </div>
                    <!-- Sosyal medya bağlantıları -->
                    <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google'></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Ana JavaScript dosyasını ekler -->
    <script src="assets/js/main.js"></script>
</body>

</html>
