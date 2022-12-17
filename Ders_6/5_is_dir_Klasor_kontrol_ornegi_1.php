<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Klasör Kontrol - Örnek -1</title>
</head>

<body>

<?php
// Verilen ismin  bir klasör olup olmadığını döndürür.

$dosya = "images";	// Kontrol edilecek Klasör adı

if(is_dir($dosya)) {
  echo ("$dosya bu bir DİZİNDİR");
} else {
  echo ("$dosya bu bir dizin DEĞİLDİR");
}
?>

</body>

</html>