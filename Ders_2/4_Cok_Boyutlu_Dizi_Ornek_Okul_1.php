<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çok Boyutlu Dizi Örneği OKUL 1</title>
</head>

<body>
<?php

// Okul ve Öğrencileri Barındıran Çoklu Diziler Örneği-1

$okul[0][]="Ebru";
$okul[0][]="Fuat";
$okul[0][]="Gülüzar";
$okul[0][]="Emre";

$okul[1][]="Zeynep";
$okul[1][]="Haşim";
$okul[1][]="Merve";
$okul[1][]="Nihat";

$okul[2][]="Raşit";
$okul[2][]="Gizem";
$okul[2][]="Onur";
$okul[2][]="Ayşe";


echo $okul[2][2];   // Onur sonucunu verir
?>
</body>

</html>


