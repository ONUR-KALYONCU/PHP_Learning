<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İçeriğindeki Belirli ALanaları Okuma - Örnek -1</title>
</head>

<body>

<?php
// fseek(); Dosya içeriğinin belirli bir bölümden sonrasını okumak amacıyla dosya içersinde istenilen yere konumlandırma yapar.

$file = fopen("test.txt","r");		// Kontrol edilecek Dosya adı

// Read first line
echo fgets($file);
// Move back to beginning of file
fseek($file,0);
fclose($file);


?></body>

</html>