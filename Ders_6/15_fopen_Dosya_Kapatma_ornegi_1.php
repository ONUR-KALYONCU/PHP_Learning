<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İçeriğini Kapatma - Örnek -1</title>
</head>

<body>

<?php
// fclose(); Açık bir dosya tanıtıcısını kapatır.

$dosya = fopen("test.txt","r");		// Kontrol edilecek Dosya adı


fclose($dosya);
?>
</body>

</html>