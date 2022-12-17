<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çok Boyutlu Dizi Örneği OKUL 2</title>
</head>

<body>

<?php

// Okul ve Öğrencileri Barındıran Çoklu Diziler Örneği-1

$okul[]=array("Ebru","Fuat","Gülüzar","Emre");
$okul[]=array("Zeynep","Haşim","Merve","Nihat");
$okul[]=array(
	"Raşit",
    "Gizem",
    "Onur",
    "Ayşe"
);

echo $okul[2][2]; // ekrana Onur yazar
?>


</body>

</html>


