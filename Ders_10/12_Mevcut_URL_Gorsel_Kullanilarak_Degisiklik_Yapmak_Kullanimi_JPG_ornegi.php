<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Mevcut Görsel ve Yazı Tipini Kullanarak Değişiklik yapma Kullanımı - JPG Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
// 
// ----------------------------------------------------------------------------------------------------------------------------

//buton.png dosyamızı açalım
$resim=imagecreatefromjpeg('https://jobycodirect.com/images/items/abc1.jpg'); // PNG URL'sinden bir resim yükleyin
 
//Renk tanımlamalarımızı yapalım
$beyaz=imagecolorallocate($resim,255,255,255);
$yesil=imagecolorallocate($resim,0,255,0);
$mavi=imagecolorallocate($resim,0,0,255);

//Resim üzerinde bulunan kırmızı bölgeyi yeşile boyayalım
imagefilledrectangle($resim,4,5,854,213,$beyaz);		// 854x213 px değerinde YEŞİL

//Yeni yazımız olan “Kadromuz” yazısını yazalım
imagettftext($resim, 25, 0, 100, 100, 
imagecolorallocate($resim, 0, 0, 255), 'verdana.ttf', 'Emojiler');

//Yapılan değişiklikleri PNG formatında resim dosyası haline getirelim
imagejpeg($resim,"emojiler_yeni.jpg");
imagedestroy($resim);
?>



</body>

</html>
