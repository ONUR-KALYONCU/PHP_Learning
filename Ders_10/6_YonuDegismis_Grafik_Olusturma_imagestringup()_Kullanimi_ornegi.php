<?php //<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
// ----------------------------------------------------------------------------------------------------------------------------
// 
// ----------------------------------------------------------------------------------------------------------------------------

$resim = imagecreatetruecolor(250, 250);							// 250x250 px değerinde 

$metin_rengi = imagecolorallocate($resim, 55, 255, 155);			// Arkaplan Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)
imagestringup($resim, 25, 60, 175,  'ismailkeklik.com', $metin_rengi); // Yazı Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)

header ('Content-type: image/png');
imagepng($resim);						// Resmi oluşturalım 
imagedestroy($resim);					// Resmi bellekten sil

?>
