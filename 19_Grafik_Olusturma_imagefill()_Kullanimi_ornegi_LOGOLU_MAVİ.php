<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Grafik Oluşturmada (imagewbmp) Kullanımı LOGOLU MAVİ - Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
// 
// ----------------------------------------------------------------------------------------------------------------------------

$resim 			= imagecreatefrompng('https://www.ismailkeklik.com/Yonetim/Urunler/Icon_Resimler/ismail-KEKLiK-Logo_23437-854X213.png'); // PNG URL'sinden bir resim yükleyin
$renk_mavi		= imagecolorallocate($resim,0,0,175);		// Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(konuma_gore_renk)

imagefill($resim,0,0,$renk_mavi);         	    			// Tanımlanan Rengi Oluşmasını Sağlıyoruz...                       


imagepng($resim,"c_mavi_logo.png", "2"); 					// c_mavi_logo.png isminde ve 75 kalite değerinde bir resim oluştur
imagedestroy($resim);      									// Resmi bellekten sil

?>

</body>

</html>


