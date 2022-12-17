<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Fonksiyonlar - Örnek</title>
</head>

<body>

<?php //Aşağıdaki fonksiyon verilen sayı aralığını toplar.
function sayitopla($ilk,$son)
{
  $toplam=0;
 for ($i=$ilk; $i<=$son ;$i++)
 {  
   $toplam=$toplam + $i;
 }
return ($toplam);
}
$num1=100; $num2=500;
$sonuc= sayitopla($num1, $num2 );
echo "$num1-$num2 arası toplam =$sonuc";
?> 

</body>

</html>