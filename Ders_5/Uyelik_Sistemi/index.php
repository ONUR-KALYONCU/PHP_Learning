<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Session Üyelik Sistemi Giriş - Örnek -1</title>
</head>
<?php
// index.php sayfası

session_start();

include("ayarlar.php");

if($_SESSION["kullaniciadi"]==$kullanici && $_SESSION["kullanicisifresi"]==$parola)	{

echo "Hoş Geldiniz Sayın ".$_SESSION["kullaniciadi"]."<br><br><br>
<a href='ozel_sayfa.php'>Özel Sayfa</a> | <a href='cikis.php'>Çıkış</a>";
	
}

elseif($_SESSION["kullaniciadi"]==$kullanici && $_SESSION["kullanicisifresi"]<>$parola){
   echo "Kullanıcı adını DOĞRU Ancak Şifreyi yanlış girdiniz. Tekrar deneyiniz!<br><br>";
   echo "<a href='giris.php'>Geri</a>";
}

elseif($_SESSION["kullaniciadi"]<>$kullanici && $_SESSION["kullanicisifresi"]==$parola){
   echo "Şifreyi DORĞU Ancak Kullanıcı adını YANLIŞ girdiniz. Tekrar deneyiniz!<br><br>";
   echo "<a href='giris.php'>Geri</a>";
}
else{
   echo "Kullanıcı adını ve şifreyi yanlış girdiniz. Tekrar deneyiniz!<br><br>";
   echo "<a href='giris.php'>Geri</a>";
}


/*else
{

header("location: giris.php");	

}
*/
?>