<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Bilgi Yazdırma - Örnek -1</title>
</head>

<body>

<?php
// dosyaya bilgi yazmak için kullanılır.

$dosya = fopen("deneme.php","w");		// Kontrol edilecek Dosya adı

echo fwrite($dosya,'<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya Bilgi Yazdırma - Örnek -1</title>
</head>
<?php echo "merhaba dünya"; ?>

');
fclose($dosya);

?>

</body>

</html>