<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Erişim ve Değişim Zamanı Gösterme  - Örnek -1</title>
</head>

<body>

<?php 

// touch(); Dosyanın erişim ve değişiklik zamanını ayarlar. Dosya mevcut değilse oluşturulur.

$dosya = "deneme.txt";
  
// setting touch time to 5 hours in the past
$time = time() - 18000;
  
// using touch() function to change the modification 
// time of a file to current system time
if (touch($dosya, $time)) 
{
    echo ("$dosya değişiklik süresi geçmişte 5 saat olarak değiştirilmiştir.");
 } 
else 
{
   echo ("$dosya değişiklik zamanı değiştirilemez.");
}
?>

</body>

</html>