<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Kontrol - Örnek -1</title>
</head>

<body>

<?php
// is_file(); Verilen ismin  bir dosya olup olmadığını döndürür.

$dosya = "test.txt";	// Konreol edilecek Dosya adı

if(is_file($dosya)) {
  echo ("$dosya normal bir DOSYADIR");
} else {
  echo ("$dosya normal bir dosya DEĞİLDİR");
}
?>

</body>

</html>