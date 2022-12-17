<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Session Üyelik Sistemi Giriş - Örnek -1</title>
</head>
<?php
// ozel_sayfa.php sayfası

session_start();

if($_SESSION["kullaniciadi"] == "admin" && $_SESSION["kullanicisifresi"] == "1234")	
{
	echo " Bu sayfa size özel bir sayfadır. Oturumunuz başarıyla gerçekleştiği için şuan bu sayfaya girebilmektesiniz.
	<br><br>
	<a href='index.php'>Anasayfa</a> | <a href='cikis.php'>Çıkış</a>
	";
}
else
{
	header("location: giris.php");	
}

?>