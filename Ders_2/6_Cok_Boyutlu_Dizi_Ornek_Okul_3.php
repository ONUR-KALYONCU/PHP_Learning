<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Çok Boyutlu Dizi Örneği OKUL 3</title>
</head>

<body>

<?php

// Okul ve Öğrencileri Barındıran Çoklu Diziler Örneği-3

// Eğer indislerin "1" den başlamasını isterseniz şöyle bir tanımlama yapabilirsiniz.

$okul[1]=array(1=>"Ebru","Fuat","Gülüzar","Emre");
$okul[]=array(1=>"Zeynep","Haşim","Merve","Nihat");
$okul[]=array(
		1=>"Raşit",
        "Gizem",
        "Onur",
        "Ayşe"
);

echo $okul[3][1]; // ekrana Raşit yazar

?>

</body>

</html>