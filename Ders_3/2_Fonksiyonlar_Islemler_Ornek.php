<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Fonksiyonlar - İşlemler</title>
</head>

<body>

<?php
function topla($a, $b) {  return ($a + $b); }
function carp($a, $b) { return ($a*$b);  }
function mod_al($a, $b) { return ($a % $b); }

$num1 = 8; $num2 = 3;

$sonuctoplam = topla($num1, $num2);
echo "Toplam sonucu: $sonuctoplam<br>";

$sonuccarpim = carp($num1, $num2);
echo "Çarpim sonucu: $sonuccarpim<br>";

$sonucmod =    mod_al($num1, $num2);
echo "Mod sonucu: $sonucmod<br>";


?>
 
</body>

</html>