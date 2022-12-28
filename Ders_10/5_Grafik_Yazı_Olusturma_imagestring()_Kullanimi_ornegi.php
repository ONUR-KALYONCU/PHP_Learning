<?php //<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

$image = imagecreate(500, 300);										// 500x300 px değerinde 

$background_color 	= imagecolorallocate($image, 0, 153, 0);		// Arkaplan Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)
$text_color 		= imagecolorallocate($image, 255, 255, 255);	// Yazı Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)

// Dize içeren görüntü oluşturma işlevi.
imagestring($image, 5, 180, 100, "Deneme ilk Satir", $text_color);		
imagestring($image, 3, 160, 120, "Deneme Satır Devam", $text_color);

header("Content-Type: image/png");

imagepng($image);					// Resmi oluşturalım 
imagedestroy($image);				// Resmi bellekten sil

?>


