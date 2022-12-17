<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Fonksiyonlar – Harf Notu Bulma</title>
</head>

<body>

<?php
function hesapla($not1, $not2, $not3)
{
   $sonuc = ($not1 + $not2 + $not3)/3;
   
   if ($sonuc>84 && $sonuc<=100)  $harf='A';
   elseif ($sonuc>=70 && $sonuc<=84)  $harf='B';
   elseif ($sonuc>=55 && $sonuc<=69)  $harf='C';
   elseif ($sonuc>=45 && $sonuc<=54)  $harf='D';
   elseif ($sonuc>=0 && $sonuc<=44)  $harf='E';
  return($harf);
}

$n1=90; $n2=80; $n3=100;
$sonucnot = hesapla($n1, $n2, $n3);
echo "$n1-$n2-$n3 Harf notu =$sonucnot";
?>
 
</body>

</html>