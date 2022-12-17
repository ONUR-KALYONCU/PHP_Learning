<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Erişim Zamanı Gösterme - Örnek -1</title>
</head>

<body>

<?php
// fileatime(); Dosyaya son erişim zamanını döndürür.

//echo fileatime("test.txt");
//echo "<br>";

echo "Son Erişim: ".date("F d Y H:i:s.", fileatime("test.txt"));
?>

</body>

</html>