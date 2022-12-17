<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Form POST Metoduyla Kullanıcı Giriş Sonuç Sayfası</title>
</head>

<body>

<?php
// İstenen kullanıcı adını ve şifreyi sabit değişkenler olarak tanımlayalım.
define("username","ismailkeklik");
define("password","1234");


if($_POST["k_adi"]==username and $_POST["sifre"]==password){
   echo "Giriş izni verildi. Hoşgeldiniz.";
}

elseif($_POST["k_adi"]==username and $_POST["sifre"]<>password){
   echo "Kullanıcı adını DOĞRU Ancak Şifreyi yanlış girdiniz. Tekrar deneyiniz!<br>";
   echo "<a href='14_Form_POST_ornek_4.php'>Geri</a>";
}

elseif($_POST["k_adi"]<>username and $_POST["sifre"]==password){
   echo "Şifreyi DORĞU Ancak Kullanıcı adını YANLIŞ girdiniz. Tekrar deneyiniz!<br>";
   echo "<a href='14_Form_POST_ornek_4.php'>Geri</a>";
}

else{
   echo "Kullanıcı adını ve şifreyi yanlış girdiniz. Tekrar deneyiniz!<br>";
   echo "<a href='14_Form_POST_ornek_4.php'>Geri</a>";
}
?>

</body>
</html>