<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Yüklü olan PHP’nin desteklediği resim formatlarını Kontrol Etme- Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
// Yüklü olan PHP’nin desteklediği resim formatlarının Olup Olmadığını Kontrol ediyoruz.
// ----------------------------------------------------------------------------------------------------------------------------

if (imagetypes() & IMG_PNG) {
    echo "PNG desteği var<br>";
}
else {
    echo "PNG desteği yok <br>";
}

if (imagetypes() & IMG_JPEG) {
    echo "JPG desteği var<br>";
}
else {
    echo "JPG desteği yok <br>";
}

if (imagetypes() & IMG_GIF) {
    echo "GIF desteği var<br>";
}
else {
    echo "GIF desteği yok <br>";
}
?>
</body>

</html>


