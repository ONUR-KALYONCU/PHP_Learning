<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Form GET Metoduyla Örnek -2</title>
</head>

<body>

<?php
$s1=rand(1,100);
$s2=rand(1,100);

echo "<b>Bulunan sayılar:</b><br>";
echo "Sayı 1=$s1<br>Sayı 2=$s2<br>";

echo "<a href='10_Form_GET_ornek_2_Sonuc.php?sayi1=$s1&sayi2=$s2'>Bu linke tıklayarak sayıları gönderebilirsiniz</a>";
?>

</body>
</html>