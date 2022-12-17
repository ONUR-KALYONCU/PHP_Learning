<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İçeriğini Açma - Örnek -1</title>
</head>

<body>

<?php
// fopen(); Bir dosya veya URL'yi açar.

$dosya = fopen("test.txt","r");		// Kontrol edilecek Dosya adı


while(! feof($dosya)) {
  $line = fgets($dosya);
  echo $line. "<br>";
}

?>
</body>

</html>