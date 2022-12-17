<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Unset Veri Yok Etme</title>
</head>

<body>

<?php 

$sayi1=5;
$sayi2=3;
$bolsonuc=$sayi1/$sayi2;
$cikarsonuc=$sayi1 - $sayi2;
$modsonuc= $sayi1 % $sayi2;
$carpsonuc =$sayi1 * $sayi2;

print("bölüm sonucu:%d".$bolsonuc."<br>");
print("çıkarım sonucu:%d".$cikarsonuc."<br>");
print("mod sonucu:%d".$modsonuc."<br>");
print("çarpim sonucu:%d".$carpsonuc."<br>");

?>
</body>

</html>
