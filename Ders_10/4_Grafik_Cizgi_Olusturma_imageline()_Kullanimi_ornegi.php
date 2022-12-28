<?php
// ----------------------------------------------------------------------------------------------------------------------------
// 
// ----------------------------------------------------------------------------------------------------------------------------

$im		 = imagecreate(700, 200);						// 700x200 px deÄŸerinde 
  
$yellow	 = imagecolorallocate($im, 255, 255, 0);		// Renk TanÄ±mlanÄ±yor... (0,0,0)=(RGB) Yani Ä°lk deÄŸer RED(KÄ±rmÄ±zÄ±), Ä°kinici DeÄŸerGREEN (YeÅŸim), ÃœÃ§Ã¼ncÃ¼ DeÄŸer BLUE(Mavi)
$blue	 = imagecolorallocate($im, 0, 0, 255);			// Renk TanÄ±mlanÄ±yor... (0,0,0)=(RGB) Yani Ä°lk deÄŸer RED(KÄ±rmÄ±zÄ±), Ä°kinici DeÄŸerGREEN (YeÅŸim), ÃœÃ§Ã¼ncÃ¼ DeÄŸer BLUE(Mavi)
  
imageline($im, 0, 0, 700, 200, $yellow);				// SarÄ± bir arka plan ekleyin
  imageline($im, 0, 0, 840, 250, $blue);				// Mavi bir Ã‡izgi ekleyin
  
header('Content-type: image/png');
imagepng($im);											// Resmi oluÅŸturalÄ±m 
imagedestroy($im);										// Resmi bellekten sil
?>


