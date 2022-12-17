<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>str_replace fonksiyonu</title>
</head>

<body>

<?php 
// str_replace() fonksiyonu istediğimiz karakterleri farklı bir karaktere dönüştürmemizi sağlar.

// Kullanımı: str_replace(bul, değiştir, değişken)

$veri = "İstanbul güzel bir şehir?"; 
echo str_replace("güzel","pahalı",$veri);

?>

</body>

</html>