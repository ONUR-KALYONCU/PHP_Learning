<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>substr() fonksiyonu</title>
</head>

<body>

<?php 
//Dizgenin bir kısmını döndürür.

// Pozitif Numaralar:
echo substr("Merhaba Dünya",10)."<br>";
echo substr("Merhaba Dünya",1)."<br>";
echo substr("Merhaba Dünya",3)."<br>";
echo substr("Merhaba Dünya",7)."<br>";
echo "<br>";

// Negatif Numaralar:
echo substr("Merhaba Dünya",-1)."<br>";
echo substr("Merhaba Dünya",-10)."<br>";
echo substr("Merhaba Dünya",-8)."<br>";
echo substr("Merhaba Dünya",-4)."<br>";
?>

</body>

</html>