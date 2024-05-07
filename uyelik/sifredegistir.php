<?php  
// Veritabanına bağlanmak için PDO nesnesi oluşturulur
$db = new PDO("mysql:host=localhost;dbname=uyelik2","root","");

// Form gönderildiğinde çalışır
if($_POST){
   // Formdan gelen veriler alınır ve etiketlerden arındırılır
   $email = strip_tags ($_POST['email']);
   $sifre1 = strip_tags ($_POST['sifre1']);
   $sifre2 = strip_tags ($_POST['sifre2']);
   $code = strip_tags ($_POST['code']);

   // Formun boş olmadığını kontrol eder
   if($email!="" and $sifre1!="" and $sifre2!=""){
        // Şifrenin en az 6 karakter olup olmadığını kontrol eder
        if(strlen($sifre1) >= 6 && strlen($sifre2) >= 6){ 
            // Şifrelerin aynı olup olmadığını kontrol eder
            if($sifre1 == $sifre2){
                // Kullanıcının veritabanında olup olmadığını ve doğru kodu girdiğini kontrol eder
                $c = $db->query("select * from kullanicilar where code='".$code."' and email='".$email."'")->rowCount();
                // Kullanıcı veritabanında bulunuyorsa ve doğru kod girildiyse
                if($c!=0){
                    // Yeni şifre veritabanına kaydedilir ve kod sıfırlanır
                    if($db->query("update kullanicilar set pass='".($sifre1)."', code='' where email='".$email."'"))
                    {
                        echo "Şifre değiştirildi"; // Şifre değiştirme işlemi başarılı mesajı görüntülenir
                    }
                }
                else{
                    echo "Kod yanlış"; // Yanlış kod girişi uyarısı görüntülenir
                }
            }
            else {
                echo "Şifreler uyuşmuyor"; // Şifrelerin uyuşmadığı uyarısı görüntülenir
            }
        }
        else {
            echo "Şifreler en az 6 karakter olmalıdır"; // Şifrelerin en az 6 karakter olması gerektiği uyarısı görüntülenir
        }
   }
   else
   {
        echo "Lütfen tüm alanları doldurunuz"; // Boş alan uyarısı görüntülenir
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kod</label>
            <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Şifre 1</label>

            <input type="password" name="sifre1" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Şifre 2</label>

            <input type="password" name="sifre2" class="form-control" id="exampleInputPassword1">
        </div>
        <button class="btn btn-primary">Değiştir</button>
    </form>
</body>

</html>
