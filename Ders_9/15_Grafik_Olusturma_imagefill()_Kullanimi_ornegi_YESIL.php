<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Grafik Oluşturmada (imagejpng) Kullanımı YEŞİL - Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
/*     b_yesil.png isminde ve 2 kalite değerinde bir KIRMIZI resmi */
 /*    dosyamızla aynı yere  oluşturacaktır.                        */
// ----------------------------------------------------------------------------------------------------------------------------
   $resim		= imagecreatetruecolor(100,50);  	 	// 100x50 px değerinde 
   $renk_yesil 	= imagecolorallocate($resim,0,255,0);	// Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)
   
   imagefill($resim,0,0,$renk_yesil);         			// Tanımlanan Rengi Oluşmasını Sağlıyoruz...                       

   imagepng($resim,"b_yesil.png", "2"); 				// b_yesil.png isminde ve 2 kalite değerinde bir resim oluştur
   imagedestroy($resim);      							// Resmi bellekten sil

?>
</body>

</html>


