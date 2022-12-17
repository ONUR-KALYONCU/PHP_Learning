<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İçeriğindeki İlk Satırı Okuma/Gösterme - Örnek -1</title>
</head>

<body>

<?php 
//  fgets(); Dosya tanıtıcısından bir satır döndürür.

$dosya = fopen("test.txt","r");			// Kontrol edilecek Dosya adı


echo $line = fgets($dosya);				// İlgili Dosyanın İlk Satırındaki Karakter Sayısı Kadar Göster

/* 										// Eğer Bu Alanı Akrif Ederseniz Tüm İçerikleri Belirlenen Kararter Sayısı Kadar Satırlarda Gösterir
while(! feof($dosya)) {
  $line = fgets($dosya, 20);
  echo $line. "<br>";
}

*/
?>

</body>

</html>