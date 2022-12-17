<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İöeriğine Başka Dosya Çekme - Örnek -1</title>
</head>

<body>

<?php

//echo "Bir ".$renk." ".$meyve; // -> Bir

include('2_include_edilen_dosya_1.php'); 				// Dahil edilecek Dosya adı

echo "Bir ".$renk." ".$meyve." ".$mevsim." Meyvesidir."; //"Bir $renk $meyve"; // -> Bir yeşil elma

?> 
</body>

</html>