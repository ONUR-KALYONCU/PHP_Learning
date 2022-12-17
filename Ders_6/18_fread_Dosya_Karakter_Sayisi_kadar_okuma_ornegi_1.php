<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İçeriğindeki Belirli Karakter Sayısı Kadar Okuma/Gösterme - Örnek -1</title>
</head>

<body>


<?php

$dosya = fopen("test.txt", "r");			// Kontrol edilecek Dosya adı
  
echo fread($dosya, "23");			     	// İlgili Dosyanın İlk Satırındaki Karakter Sayısı Kadar Göster
  
// closing the file
fclose($dosya);
?>
</body>

</html>