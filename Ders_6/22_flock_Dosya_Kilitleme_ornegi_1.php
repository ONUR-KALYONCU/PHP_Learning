<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Kilitleme - Örnek -1</title>
</head>

<body>

<?php
// flock(); Bir dosyaya aynı anda bir erişim yapılabilmesini sağlar. Aynı anda dosyaya birden çok kişinin erişebilmesini engeller.

$dosya = fopen("test.txt","w+");		// Kontrol edilecek Dosya adı

// exclusive lock
if (flock($dosya,LOCK_EX)) {
  fwrite($dosya,"Bu Yazı Yazılsın ve Sonra Kilitle.");
  fflush($dosya);
  // release lock
  flock($dosya,LOCK_UN);
} else {
  echo "Error locking file!";
}
fclose($dosya);
?>
</body>

</html>