<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Form POST Metoduyla Hesaplama Sonuç Sayfası</title>
</head>

<body>

<?php

$s1=$_POST["sayi1"];
$s2=$_POST["sayi2"];

$toplam=$s1+$s2;

echo "Sayıların toplamı: $s1+$s2=$toplam";

?>

</body>
</html>