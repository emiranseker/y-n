<?php   
// Veritabanına bağlanmak için PDO nesnesi oluşturulur
$db = new PDO("mysql:host=localhost;dbname=uyelik2","root",""); 

// Form gönderildiğinde çalışır
if($_POST){ 
    // Formdan gelen e-posta adresi alınır ve etiketlerden arındırılır
    $email=strip_tags($_POST['email']); 

    // E-posta adresinin boş olmadığını kontrol eder
    if($email!="") 
    { 
        // Veritabanında e-posta adresini kontrol eder
        $c = $db->query("select * from kullanicilar where email='".$email."'")->rowcount(); 

        // E-posta adresi veritabanında bulunmuyorsa
        if($c==0){ 
            echo "Böyle bir kullanıcı yok"; // Kullanıcı bulunamadı uyarısı görüntülenir
        } 
        else { 
            // E-posta adresi bulunduğunda, bu kullanıcıya bir kod gönderilir
            $code = uniqid();  // Rastgele bir kod oluşturulur

            // Kullanıcının veritabanındaki kaydına bu kod atanır
            if($db->query("update kullanicilar set code='".$code."' where email='".$email."'")) 
            { 
                echo "Kod gönderildi"; // Kod gönderme işlemi başarılı mesajı görüntülenir
            } 
            else{ 
                echo "Bir hata oluştu"; // Kod gönderme işleminde bir hata oluştu uyarısı görüntülenir
            } 
        } 
    } 
    else{ 
        echo "E-posta boş bırakılamaz"; // E-posta alanı boş uyarısı görüntülenir
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
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        </div> 
        <button type="submit" class="btn btn-primary">Kod gönder</button> 
    </form> 
    <a href="sifredegistir.php">Devam et</a> 
</body> 

</html> 
