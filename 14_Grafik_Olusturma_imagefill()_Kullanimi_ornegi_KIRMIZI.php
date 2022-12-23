<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Grafik Oluşturmada (imagejpng) Kullanımı KIRMIZI - Örneği</title>
</head>

<body>
<?php
// ----------------------------------------------------------------------------------------------------------------------------
/*     b_kirmizi.png isminde ve 2 kalite değerinde bir KIRMIZI resmi */
 /*    dosyamızla aynı yere  oluşturacaktır.                        */
// ----------------------------------------------------------------------------------------------------------------------------
   $resim			= imagecreatetruecolor(100,50);  	 	// 100x50 px değerinde 
   $renk_kirmizi	= imagecolorallocate($resim,255,0,0);	// Renk Tanımlanıyor... (0,0,0)=(RGB) Yani İlk değer RED(Kırmızı), İkinici DeğerGREEN (Yeşim), Üçüncü Değer BLUE(Mavi)
   
   imagefill($resim,0,0,$renk_kirmizi);         	  		// Tanımlanan Rengi Oluşmasını Sağlıyoruz...                       

   imagepng($resim,"b_kirmizi.png", "2"); 					// b_kirmizi.png isminde ve 2 kalite değerinde bir resim oluştur
   imagedestroy($resim);      								// Resmi bellekten sil

?>
</body>

</html>


