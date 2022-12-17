<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>strcmp() fonksiyonu</title>
</head>

<body>

<?php
// İkili olarak dizge karşılaştırması yapar.

$isim1="Ali";  
$isim2="Ahmet";  

if(strcmp($isim1,$isim2)==0) 
    print "iki isim aynıdır";     
elseif(strcmp($isim1,$isim2)>0) 
    print "Birinci isim büyük"; 
else
    print "ikinci isim büyük";
?>

</body>

</html>