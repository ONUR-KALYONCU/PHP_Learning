<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dizilerin Sonuna Eklemeler Yapma</title>
</head>

<body>

<?php

// array_push = dizileri sonuna yeni eklemeler yaparak birleştirme işlemi yapar

$meyve=array("Portakal", "Mandalin", "Limon", "Grayfurt");  

$yazmeyve = array( "Kiraz", "Kayısı" ); 

echo array_push( $meyve, $yazmeyve )."\n";//Yeni dizi 

                                         //sayısını verir.
echo "<pre>";

print_r($meyve);

echo "</pre>"; 

?>

</body>

</html>