<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Bilgi Yazdırma - Örnek -1</title>
</head>

<body>

<?php
// dosyaya bilgi yazmak için kullanılır.

$dosya = fopen("test.txt","w");

echo fputs($dosya,"Merhaba Dünya! 4423");
fclose($dosya);

?>

</body>

</html>