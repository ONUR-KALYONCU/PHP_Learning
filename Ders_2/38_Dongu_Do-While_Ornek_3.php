<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Do-While Döngüsü Örnek 3</title>
</head>

<body>

<?php

// 1+3+5…+99   toplamını bulunuz?

$toplam=0;
$i=1;

do
{
$toplam=$toplam + $i;
$i+=2;
}while ($i<100);
printf("DO-While ile 1 den 100 e kadar toplam:$toplam<br>");

?>

</body>

</html>