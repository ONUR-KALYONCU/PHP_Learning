<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Döngülerde Şart Örnek 3</title>
</head>

<body>

<?php

$not1=90;  // (Not1=50, Not2=50 ve Not1=40, Not2=30 olarak deneyin)
$not2=40; 

$ortalama=($not1+$not2)/2;
	echo "Not ortalaması=". $ortalama; 
if ($ortalama>50)
	echo "geçtiniz";
elseif ($ortalama<50)
	echo "kaldınız";
else 
	echo "Sınırdasınız";


?>


</body>

</html>


