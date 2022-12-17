<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Değişim Zamanını Gösterme - Örnek -1</title>
</head>

<body>

<?php
// filemtime(); Dosyanın değişiklik zamanını döndürür.

//echo filemtime("test.txt");
//echo "<br>";

echo "Son Değişim: ".date("F d Y H:i:s.", filemtime("test.txt"));
?>

</body>

</html>