<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Boyut Uzunluğu Gösterme - Örnek -1</title>
</head>

<body>

<?php
// filesize(); Dosya uzunluğunu döndürür.

$dosya = "test.txt";					// Kontrol edilecek Dosya adı

$dosya_boyutu 	= filesize($dosya);		// Dosya Boyutu ALınıyor
$dosya_limiti	= 10;					// Eklenecek Dosya Boyutu Limiti

if($dosya_boyutu>$dosya_limiti) {
   echo "Dosya Boyutu <b>$dosya_limiti Byte</b> Büyük Olduğu İçin Yükleme Yapılamaz ";
} else {
   echo "Dosya Yüklemeye Uygun Boyutta";
}

?>

</body>

</html>