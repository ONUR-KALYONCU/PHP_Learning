<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İçeriğindeki İlk Satırı Okuma/Gösterme - Örnek -1</title>
</head>

<body>

<?php
//  feof(); Bir dosya tanıtıcısı üzerinde konum dosya sonunda mı diye bakar.

$dosya = fopen("test.txt","r");			// Kontrol edilecek Dosya adı


while(! feof($dosya)) {					// Eğer Bu Alanı Akrif Ederseniz Tüm İçerikleri Belirlenen Kararter Sayısı Kadar Satırlarda Gösterir  $line = fgets($dosya, 20);
  echo $line. "<br>";
}

fclose($dosya);
?>
</body>

</html>