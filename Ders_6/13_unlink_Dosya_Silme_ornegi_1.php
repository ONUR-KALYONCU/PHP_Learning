<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Silme - Örnek -1</title>
</head>

<body>

<?php 

// unlink(); Bir dosyayı siler.

$silinecek_dosya = "deneme.txt";	// Kontrol edilecek Dosya adı

$dosya = $silinecek_dosya;			// Silinecek Dosya Değişkene Tanımlandı
  
if (file_exists($dosya)) 			// Dosyanın Olup Olmadığı Kontrol Ediliyor...
{
    echo "$dosya isimli dosya SİLİNDİ";
    @unlink($dosya);
}
else 
{
    echo "$dosya diye bir dosya YOK";
}

?>

</body>

</html>