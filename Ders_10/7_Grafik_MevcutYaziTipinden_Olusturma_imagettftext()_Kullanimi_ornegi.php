<?php //<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
// ----------------------------------------------------------------------------------------------------------------------------
// 
// ----------------------------------------------------------------------------------------------------------------------------

$im = imagecreatetruecolor(800, 250);				// 800x250 px değerinde 
  
// Yerel dosyadan bir yazı tipi kullanarak metin ekleyin	
imagettftext($im, 90, 0, 100, 100, 
imagecolorallocate($im, 0, 0, 255), 
'RugeBoogie-Regular.ttf', 'ismailkelik.com');
  
header('Content-Type: image/png');
imagepng($im);							// Resmi oluşturalım 
imagedestroy($im);						// Resmi bellekten sil
?>
