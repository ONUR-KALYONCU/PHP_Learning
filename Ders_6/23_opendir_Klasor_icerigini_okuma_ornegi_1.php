<!DOCTYPE html>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dosya İçeriğindeki Dosyaları Okuma/Gösterme - Örnek -1</title>
</head>

<body>
<?php
$dizin = "bir/yol/";		// Kontrol edilecek Klasör Dizin adı

// Dizin aç ve içeriğin oku
if (is_dir($dizin)) {
    if ($dit = opendir($dizin)) {
        while (($dosya = readdir($dit)) !== false) {
          echo "dosya adı: $dosya - dosya türü: " .
            ((filetype($dizin . $dosya) === "dir") ? "dizin" : "dosya") . "\n";
        }
        closedir();
    }
}
?>
</body>

</html>