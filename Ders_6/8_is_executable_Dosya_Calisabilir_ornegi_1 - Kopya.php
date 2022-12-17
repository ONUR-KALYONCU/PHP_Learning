<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Çalışabilir Durum - Örnek -1</title>
</head>

<body>

<?php
//  is_executable(); Bir dosyanın çalıştırılabilir bir dosya olup olmadığını döndürür.

$dosya = "yeni.txt";		// Kontrol edilecek Klasör adı

if(is_executable($dosya)) {
   echo ("Çalıştırılabilir Dosya!");
} else {
   echo ("Çalıştırılabilir Dosya Değil!");
}
?>

</body>

</html>