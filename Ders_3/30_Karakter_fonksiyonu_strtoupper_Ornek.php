<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>strtoupper fonksiyonu</title>
</head>

<body>

<?php
// Bir dizgenin harflerini bütük harfe çevirir.

$str = "Merhaba Okul";
$str = strtoupper($str);

	echo $str;  // Çıktı: MERHABA OKUL
?> 

</body>

</html>