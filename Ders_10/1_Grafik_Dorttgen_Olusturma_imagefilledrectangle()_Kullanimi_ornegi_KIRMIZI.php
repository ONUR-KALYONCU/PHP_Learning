<?php //<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
// ----------------------------------------------------------------------------------------------------------------------------
// 100*50 boyutundaki resim alanı içerisine 80*30 ebatında kırmızı renkte dörtgen çizelim..
// ----------------------------------------------------------------------------------------------------------------------------

	$resim		= imagecreate(100,50);  			 		// 100x50 px değerinde 
	$kirmizi	= imagecolorallocate ($resim,255,0,0);		// Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)
	 
	imagefilledrectangle($resim,10,10,90,40,$kirmizi);	//Kırmızı renkte dikdörtgen çizelim.

	imagepng($resim);									//Resmi oluşturalım 
	header("Content-type: image/png");
	imagedestroy($resim);								// Resmi bellekten sil

?>

