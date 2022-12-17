<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Yazılabilir Durum - Örnek -1</title>
</head>

<body>

<?php
//  is_writable(); Bir dosyanın yazılabilir olup olmadığını döndürür.

$dosya = "yeni.txt";	// Kontrol edilecek Dosya adı

if(is_writable($dosya)) {
   echo ("Yazılabilir Dosya!");
} else {
   echo ("Yazılabilir Dosya Değil!");
}
?>

</body>

</html>