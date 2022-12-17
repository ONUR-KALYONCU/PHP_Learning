<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>For Döngüsü Örnek 4</title>
</head>

<body>

<?php

// 1+3+5…+99  toplamını bulunuz?


$toplam=0;

for ($i=1;$i<100;$i+=2)
$toplam=$toplam + $i;
printf("For ile 1 den 100 e kadar Toplam:$toplam<br>");

?>

</body>

</html>