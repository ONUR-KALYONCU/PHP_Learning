<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Okunabilir Durum - Örnek -1</title>
</head>

<body>

<?php
//  is_readable(); Bir dosyanın mevcut ve okunabilir olup olmadığını döndürür.

$dosya = "yeni.txt";	// Kontrol edilecek Dosya adı

if(is_readable($dosya)) {
   echo ("Okunabilir Bir DOSYA!");
} else {
   echo ("Okunabilir Bir Dosya DEĞİL!");
}
?>

</body>

</html>