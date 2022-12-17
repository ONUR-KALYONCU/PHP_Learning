<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Yolu Kontrol - Örnek -1</title>
</head>

<body>

<?php
// file_exists(); Bir dosya veya dizinin mevcut olup olmadığına bakar.

$dosya = 'bir/yol/dosya.txt';	// Kontrol edilecek Dosya Yolu ve Dosya adı
  
if (file_exists($dosya)) 
{
    echo "$dosya diye bir dosya VAR";
}
else 
{
    echo "$dosya diye bir dosya YOK";
}
  
?>

</body>

</html>